<?php

namespace App\Http\Livewire\Admin\rdvs;

use Livewire\Component;
use App\Models\RdvAdmin;
use Livewire\WithPagination;

class AdminRdvComponent extends Component
{
    public $searchTerm;

    use WithPagination;
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm. '%';
        $rendezvous = RdvAdmin::where('name','LIKE',$searchTerm)
        ->orderBy('id', 'ASC')->paginate(2);
        return view('livewire.admin.admin-rdv-component',['rendezvous'=>$rendezvous])->layout('layouts.primary');
    }
}
