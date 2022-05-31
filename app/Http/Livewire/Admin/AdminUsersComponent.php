<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class AdminUsersComponent extends Component
{
    public $searchTerm;


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

    use WithPagination;
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm. '%';
        $users = User::where('name','LIKE',$searchTerm)
        ->orderBy('id', 'ASC')->paginate(2);
        return view('livewire.admin.admin-users-component',['users'=>$users])->layout('layouts.primary');
    }
}
