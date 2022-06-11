<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\Cabinet;
use App\Models\Doctor;
use Livewire\Component;
use App\Models\User;
use App\Models\TypeCabinet;
use Livewire\WithPagination;

class AdminEditUsersComponent extends Component
{

    public $idUser;
    public $name;
    public $email;
    public $gender;
    public $profile;
    public $cin;
    public $code_doctor;
    public $address;
    public $name_cabinet;
    public $phone_cabinet;
    public $email_cabinet;
    public $type_id;


    public function mount($idUser)
    {
        $this->idUser = $idUser;
        $user = User::find($this->idUser);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->cin = $user->doctor->cin;
        $this->code_doctor = $user->doctor->code_doctor;
        $this->address = $user->doctor->address;
        $this->name_cabinet = $user->doctor->cabinet->name_cabinet;
        $this->phone_cabinet = $user->doctor->cabinet->phone_cabinet;
        $this->email_cabinet = $user->doctor->cabinet->email_cabinet;
        $this->type_id = $user->doctor->cabinet->type_id;
        $this->profile = $user->profile_photo_path;
    }

    public function update()
    {
        $user = User::find($this->idUser);
        $user->name = $this->name;
        $user->save();
        $doctor = Doctor::where('user_id',$this->idUser)->first();
        $doctor->cin = $this->cin;
        $doctor->code_doctor = $this->code_doctor;
        $doctor->address = $this->address;
        $doctor->save();
        $cabinet = Cabinet::where('doctor_id',$doctor->id)->first();
        $cabinet->type_id = $this->type_id;
        $cabinet->save();
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
        $types = TypeCabinet::where('status',0)->get();
        return view('livewire.admin.users.admin-edit-users-component', ['users' => $users,'types'=>$types])->layout('layouts.primary');
    }
}
