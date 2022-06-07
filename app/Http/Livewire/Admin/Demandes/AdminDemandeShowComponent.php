<?php

namespace App\Http\Livewire\Admin\Demandes;

use Livewire\Component;
use App\Models\Demande;

class AdminDemandeShowComponent extends Component
{

    public $idDemande;
    public $demandes;

    public function mount($idDemande)
    {
        $this->idDemande = $idDemande;
    }

    public function valideDemande($id){
        $demande = Demande::find($id);
        $demande->status = 1;
        $demande->save();
        $message = "La demande a été validée";
        session()->flash('demandeValider',$message);
    }

    public function refuseDemande($id){
        $demande = Demande::find($id);
        $demande->status = 2;
        $demande->save();
        $message = "La demande a été refusée";
        session()->flash('demandeRefusée',$message);
    }

    public function render()
    {
        $this->demandes = Demande::find($this->idDemande);
        return view('livewire.admin.demandes.admin-demande-show-component')->layout('layouts.primary');
    }
}
