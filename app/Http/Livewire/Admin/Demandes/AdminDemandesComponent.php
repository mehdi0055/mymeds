<?php

namespace App\Http\Livewire\Admin\Demandes;

use App\Models\Demande;
use Livewire\Component;
use Livewire\WithPagination;

class AdminDemandesComponent extends Component
{

    public $uid ;
    public $demandeValider;
    public $demandeRefuser;


    public function confirmDeleteUser($id){

        $this->uid = $id;
       }

    use WithPagination;
    public function render()
    {

        $this->demandeValider = Demande::where('status',1)->get();
        $this->demandeRefuser = Demande::where('status',2)->get();
        $demandesValider = Demande::where('status',1)->paginate(5);

        $demandes = Demande::where('status',0)->paginate(5);
        return view('livewire.admin.demandes.admin-demandes-component',['demandes'=>$demandes,'demandesValider'=>$demandesValider])->layout('layouts.primary');
    }
}
