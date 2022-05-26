<?php

namespace App\Http\Livewire;

use App\Models\RdvAdmin;

use Livewire\Component;

class CanceledRdvComponent extends Component
{

    public $idRdv;

    public function mount($idRdv)
    {
       $this->idRdv = $idRdv;
       $rendezvous = RdvAdmin::find($idRdv);
	   $rendezvous->cancel = 1;
	   $rendezvous->save();
       $message = "Votre Rendez vous annuler";
       session()->flash('success',$message);
    }


    public function render()
    {
        $title = __('language.home');
        return view('livewire.canceled-rdv-component')->layout('layouts.landing',compact('title'));
    }
}
