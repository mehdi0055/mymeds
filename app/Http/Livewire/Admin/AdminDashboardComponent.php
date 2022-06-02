<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use App\Models\RdvAdmin;
use Livewire\WithPagination;

class AdminDashboardComponent extends Component
{
    public $searchTerm;
    public $uid ;
    public $name;
    public $searchTerm1;

    public function activeUser($id){
        $user = User::find($id);
        $user->active = 1;
        $user->save();
    }

    public function inactiveUser($id){
        $user = User::find($id);
        $user->active = 0;
        $user->save();
    }

    public function confirmDeleteUser($id){
     $user = User::find($id);
     $this->name = $user->name;
     $this->uid = $id;
    }

    public function delete(){
        $user = User::find($this->uid);
        $user->delete = 1;
        $user->save();
        $this->emit('userDeleted');
        $message = "L'utilisateur a été suprimée";
        session()->flash('userDeleted',$message);
       }

    use WithPagination;
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm. '%';
        $users = User::where('name','LIKE',$searchTerm)->where('delete',0)
        ->orderBy('id', 'ASC')->paginate(2);
        $searchTerm1 = '%'.$this->searchTerm1. '%';
        $rendezvous = RdvAdmin::where('name','LIKE',$searchTerm)
        ->orderBy('id', 'ASC')->paginate(2);
        return view('livewire.admin.admin-dashboard-component',['users'=>$users,'rendezvous'=>$rendezvous])->layout('layouts.primary');
    }
}
