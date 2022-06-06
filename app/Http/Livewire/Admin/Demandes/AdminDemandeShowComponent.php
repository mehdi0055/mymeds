<?php

namespace App\Http\Livewire\Admin\Demandes;

use Livewire\Component;
use App\Models\Demande;

class AdminDemandeShowComponent extends Component
{

    public $idDemande;
    public $demande;

    public function mount($idDemande)
    {
        $this->idDemande = $idDemande;
        $this->demande = Demande::find($idDemande);

    }

    public function render()
    {
        return view('livewire.admin.demandes.admin-demande-show-component')->layout('layouts.primary');
    }
}
