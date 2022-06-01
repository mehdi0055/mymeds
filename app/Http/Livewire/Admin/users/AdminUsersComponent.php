<?php

namespace App\Http\Livewire\Admin\users;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class AdminUsersComponent extends Component
{
    public $searchTerm;
    public $uid ;
    public $name;
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
        $message = 'l\'utilisateur a ete suprimée avec succée';
        session()->flash('userDeleted',$message);
       }

    use WithPagination;
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm. '%';
        $users = User::where('name','LIKE',$searchTerm)->where('delete',0)
        ->orderBy('id', 'ASC')->paginate(2);
        return view('livewire.admin.users.admin-users-component',['users'=>$users])->layout('layouts.primary');
    }
}
