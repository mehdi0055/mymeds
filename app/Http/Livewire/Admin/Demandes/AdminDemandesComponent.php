<?php

namespace App\Http\Livewire\Admin\Demandes;

use App\Models\Demande;
use Livewire\Component;
use Livewire\WithPagination;

class AdminDemandesComponent extends Component
{

    public $uid ;
    public $searchTerm;
    public $searchTerm1;
    public $searchTerm2;
    public $CountdemandeValider;
    public $CountdemandeRefuser;
    public $CountdemandeEncours;
    public $CountAllDemandes;


    public function confirmDeleteDemande($id){
        $this->uid = $id;
    }

    public function deleteDemande(){
        $user = Demande::find($this->uid);
        $user->delete = 1;
        $user->save();
        $this->emit('demandeDeleted');
        $message = "La demande a été suprimée";
        session()->flash('demandeDeleted',$message);
       }

    use WithPagination;
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm. '%';
        $searchTerm1 = '%'.$this->searchTerm1. '%';
        $searchTerm2 = '%'.$this->searchTerm2. '%';

        //Count demandes
        $this->CountdemandeValider = Demande::where('delete',0)->where('status',1)->get()->count();
        $this->CountdemandeRefuser = Demande::where('delete',0)->where('status',2)->get()->count();
        $this->CountdemandeEncours = Demande::where('delete',0)->where('status',0)->get()->count();
        $this->CountAllDemandes = Demande::all()->count();

        $demandesValider = Demande::where('delete',0)->where('status',1)->where('lname','LIKE',$searchTerm1)->where('fname','LIKE',$searchTerm1)->paginate(5);
        $demandesEncours = Demande::where('delete',0)->where('status',0)->where('lname','LIKE',$searchTerm)->where('fname','LIKE',$searchTerm)->paginate(5);
        $demandesRefuser = Demande::where('delete',0)->where('status',2)->where('lname','LIKE',$searchTerm2)->where('fname','LIKE',$searchTerm2)->paginate(5);
        return view('livewire.admin.demandes.admin-demandes-component',['demandesEncours'=>$demandesEncours,'demandesValider'=>$demandesValider,'demandesRefuser'=>$demandesRefuser])->layout('layouts.primary');
    }
}
