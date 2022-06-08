<?php

namespace App\Http\Livewire\Admin\rdvs;

use Livewire\Component;
use App\Models\RdvAdmin;
use Livewire\WithPagination;

class AdminRdvComponent extends Component
{
    public $searchTerm;
    public $uid;
    public $name;
    public $phone;
    public $date;
    public $time;

    public function confirmDeleteRdv($id)
    {
        $this->uid = $id;
    }

    public function deleteRdv()
    {
        $rdv = RdvAdmin::find($this->uid);
        $rdv->delete = 1;
        $rdv->save();
        $this->emit('rdvDeleted');
        $message = "Le rendez vous a été suprimée";
        session()->flash('rdvDeleted', $message);
    }

    public function afficherRdv($id)
    {
        $this->uid = $id;
        $rdv = RdvAdmin::find($id);
        $this->name = $rdv->name;
        $this->phone = $rdv->phone;
        $this->date = $rdv->date;
        $this->time = $rdv->time;
    }

    public function confirmeRdv()
    {
        $rdv = RdvAdmin::find($this->uid);
        $rdv->status = 1;
        $rdv->save();
        $this->emit('rdvConfirme');
        $message = "Le rendez vous a été confirmée";
        session()->flash('rdvConfirme', $message);
    }
    public function refuseRdv()
    {
        $rdv = RdvAdmin::find($this->uid);
        $rdv->status = 2;
        $rdv->save();
        $this->emit('rdvRefuse');
        $message = "Le rendez vous a été refusée";
        session()->flash('rdvRefuse', $message);
    }



    use WithPagination;
    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $rendezvous = RdvAdmin::where('delete', 0)->where('name', 'LIKE', $searchTerm)
            ->orderBy('id', 'ASC')->paginate(2);
        return view('livewire.admin.rdvs.admin-rdv-component', ['rendezvous' => $rendezvous])->layout('layouts.primary');
    }
}
