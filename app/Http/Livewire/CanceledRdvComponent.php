<?php

namespace App\Http\Livewire;

use App\Models\RdvAdmin;

use Livewire\Component;

class CanceledRdvComponent extends Component
{

    public $id;

    public function mount($id)
    {
       $this->id = $id;
       $rendezvous = RdvAdmin::find($id);
	   $rendezvous->cancel = 1;
	   $rendezvous->save();
    }


    public function render()
    {
        return view('livewire.canceled-rdv-component');
    }
}
