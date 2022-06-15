<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;
use App\Models\User;

class AdminShowUsersComponent extends Component
{
    public $idUser;
    public $user;

    public function mount($idUser)
    {
        $this->idUser = $idUser;
        $this->user = User::find($this->idUser);
    }
    public function render()
    {
        return view('livewire.admin.users.admin-show-users-component')->layout('layouts.primary');
    }
}
