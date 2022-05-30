<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\RdvAdmin;
use Livewire\WithPagination;

class RdvComponent extends Component
{
    public $searchTerm;

    use WithPagination;
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm. '%';
        $rendezvous = RdvAdmin::where('name','LIKE',$searchTerm)
        ->orderBy('id', 'ASC')->paginate(2);
        return view('livewire.admin.rdv-component',['rendezvous'=>$rendezvous])->layout('layouts.primary');
    }
}
