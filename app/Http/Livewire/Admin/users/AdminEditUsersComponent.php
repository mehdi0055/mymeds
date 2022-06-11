<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class AdminEditUsersComponent extends Component
{

    public $idUser;
    public $name;
    public $email;
    public $phone;
    public $city;
    public $gender;
    public $profile;


    public function mount($idUser)
    {
        $this->idUser = $idUser;
        $user = User::find($this->idUser);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->profile = $user->profile_photo_path;
    }

    public function update()
    {
        $user = User::find($this->idUser);
        $user->name = $this->name;
        $user->save();
        $message = "L'utilisateur a été modifié";
        session()->flash('userUpdated', $message);
    }

    public function changeStatus($id){
        $user = User::find($id);
        $user->active = $user->active == 0 ? 1 : 0;
        $user->save();
        $message = "L'utilisateur a été activée";
        session()->flash('userActive',$message);
    }


    use WithPagination;
    public function render()
    {
        $users = User::where('delete', 0)
        ->orderBy('id', 'ASC')->paginate(2);
        return view('livewire.admin.users.admin-edit-users-component', ['users' => $users])->layout('layouts.primary');
    }
}
