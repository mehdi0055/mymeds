<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;
use App\Models\User;

class AdminEditUsersComponent extends Component
{

    public $idUser;
    public $name;

    public function mount($idUser){

        $this->idUser = $idUser;
        $user = User::find($this->idUser);
        $this->name = $user->name;
    }

    public function update(){
        $user = User::find($this->idUser);
        $user->name = $this->name;
        $user->save();
        $message = "utilisateur a été modifier avec succée";
        session()->flash('userUpdated',$message);
    }

    public function render()
    {
        $user = User::find($this->idUser);
        return view('livewire.admin.users.admin-edit-users-component',['user'=>$user])->layout('layouts.primary');
    }
}
