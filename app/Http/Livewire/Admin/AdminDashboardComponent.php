<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use App\Models\RdvAdmin;
use Livewire\WithPagination;

class AdminDashboardComponent extends Component
{
    public $searchTerm;
    public $searchTerm1;

    use WithPagination;
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm. '%';
        $users = User::where('name','LIKE',$searchTerm)
        ->orderBy('id', 'ASC')->paginate(2);
        $searchTerm1 = '%'.$this->searchTerm1. '%';
        $rendezvous = RdvAdmin::where('name','LIKE',$searchTerm)
        ->orderBy('id', 'ASC')->paginate(2);
        return view('livewire.admin.admin-dashboard-component',['users'=>$users,'rendezvous'=>$rendezvous])->layout('layouts.primary');
    }
}
