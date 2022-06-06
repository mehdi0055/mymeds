<?php

namespace App\Http\Livewire\Admin\Demandes;

use App\Models\Demande;

use Livewire\Component;
use Livewire\WithPagination;

class AdminDemandesComponent extends Component
{

    public $uid ;


    public function confirmDeleteUser($id){

        $this->uid = $id;
       }

    use WithPagination;
    public function render()
    {
        $demandes = Demande::where('status',0)->paginate(5);
        return view('livewire.admin.demandes.admin-demandes-component',compact("demandes"))->layout('layouts.primary');
    }
}
