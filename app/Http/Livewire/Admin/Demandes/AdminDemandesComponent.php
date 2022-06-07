<?php

namespace App\Http\Livewire\Admin\Demandes;

use App\Models\Demande;
use Livewire\Component;
use Livewire\WithPagination;

class AdminDemandesComponent extends Component
{

    public $uid ;
    public $searchTerm;
    public $CountdemandeValider;
    public $CountdemandeRefuser;
    public $CountdemandeEncours;
    public $CountAllDemandes;


    public function confirmDeleteUser($id){
        $this->uid = $id;
    }

    use WithPagination;
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm. '%';

        //Count demandes
        $this->CountdemandeValider = Demande::where('status',1)->get()->count();
        $this->CountdemandeRefuser = Demande::where('status',2)->get()->count();
        $this->CountdemandeEncours = Demande::where('status',0)->get()->count();
        $this->CountAllDemandes = Demande::all()->count();

        $demandesValider = Demande::where('status',1)->where('lname','LIKE',$searchTerm)->where('fname','LIKE',$searchTerm)->paginate(5);
        $demandesEncours = Demande::where('status',0)->where('lname','LIKE',$searchTerm)->where('fname','LIKE',$searchTerm)->paginate(5);
        $demandesRefuser = Demande::where('status',2)->where('lname','LIKE',$searchTerm)->where('fname','LIKE',$searchTerm)->paginate(5);
        return view('livewire.admin.demandes.admin-demandes-component',['demandesEncours'=>$demandesEncours,'demandesValider'=>$demandesValider,'demandesRefuser'=>$demandesRefuser])->layout('layouts.primary');
    }
}
