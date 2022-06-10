<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\Doctor;
use Livewire\Component;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class AdminAddUsersComponent extends Component
{
    use WithFileUploads;
    public $fname;
    public $lname;
    public $email;
    public $password;
    public $profile;
    public $cin;
    public $gender;
    public $code_doctor;


    public function resetFormSubmitted()
    {
        $this->lname = "";
        $this->fname = "";
        $this->email = "";
    }

    //check validation after the user finish typing in the fields
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'lname' => 'required',
            'fname' => 'required',
            'email' => 'required|email|unique:users',
        ]);
    }

    public function addNewUser()
    {
        $this->validate([
            'lname' => 'required|min:2',
            'fname' => 'required|min:2',
            'email' => 'required|email|unique:users',
        ]);

        if ($this->profile) {
            $imagename = Carbon::now()->timestamp . '.' . $this->profile->extension();
            $this->profile->storeAs('primary/assets/images/users/', $imagename);
        } else {

            if ($this->gender == "male") {
                $imagename = "male.png";
            } else
                $imagename = "female.png";
        }

        $password = "123456789";
        $this->password = Hash::make($password);
        $user = User::create([
            'name' => Str::upper($this->lname.' '.$this->fname),
            'email' => $this->email,
            'password' => $this->password,
            'profile_photo_path' => $imagename,
            'slug' => $this->lname,
            'utype' => 'ADM',
        ]);

        $doctor = Doctor::create([
            'fname' => $this->fname,
            'lname' => $this->lname ,
            'email_personel' => $this->email ,
            'cin' => $this->cin,
            'code_doctor' => $this->code_doctor,
            'user_id' => $user->id ,

        ]);
        $message = "L'utilisateur a été Crée";
        session()->flash('newUserAdded', $message);
        $this->resetFormSubmitted();
    }

    public function activeUser($id)
    {
        $user = User::find($id);
        $user->active = 1;
        $user->save();
        $message = "L'utilisateur a été activée";
        session()->flash('userActive', $message);
    }

    public function inactiveUser($id)
    {
        $user = User::find($id);
        $user->active = 0;
        $user->save();
        $message = "L'utilisateur a été Inactivée";
        session()->flash('userInactive', $message);
    }



    use WithPagination;
    public function render()
    {
        $users = User::where('delete', 0)
            ->orderBy('id', 'ASC')->paginate(2);
        return view('livewire.admin.users.admin-add-users-component', ['users' => $users])->layout('layouts.primary');
    }
}
