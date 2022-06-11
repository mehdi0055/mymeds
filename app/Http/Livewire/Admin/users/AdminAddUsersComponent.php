<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\Doctor;
use Livewire\Component;
use App\Models\User;
use App\Models\Cabinet;

use App\Models\TypeCabinet;
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
    public $address;
    public $name_cabinet;
    public $phone_cabinet;
    public $email_cabinet;
    public $type_id;


    public function resetFormSubmitted()
    {
        $this->lname = "";
        $this->fname = "";
        $this->email = "";
        $this->name_cabinet = "";
        $this->phone_cabinet = "";
        $this->email_cabinet = "";
        $this->address = "";
    }

    //check validation after the user finish typing in the fields
    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'lname' => 'required',
            'fname' => 'required',
            'email' => 'required|email|unique:users',
            'cin' => 'required|unique:doctors',
            'address' => 'required',
            'code_doctor' => 'required|unique:doctors',
            'name_cabinet' => 'required|unique:cabinets',
            'phone_cabinet' => 'required|unique:cabinets|max:10|min:10',
            'email_cabinet' => 'required|email|unique:cabinets',
            'type_id' => 'required',
        ]);
    }

    public function addNewUser()
    {
        $this->validate([
            'lname' => 'required',
            'fname' => 'required',
            'email' => 'required|email|unique:users',
            'cin' => 'required|unique:doctors',
            'address' => 'required',
            'code_doctor' => 'required|unique:doctors',
            'name_cabinet' => 'required|unique:cabinets',
            'phone_cabinet' => 'required|unique:cabinets|max:10|min:10',
            'email_cabinet' => 'required|email|unique:cabinets',
            'type_id' => 'required',
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
            'utype' => 'USR',
        ]);

        $doctor = Doctor::create([
            'fname' => $this->fname,
            'lname' => $this->lname ,
            'email_personel' => $this->email ,
            'cin' => $this->cin,
            'address' => $this->address,
            'code_doctor' => $this->code_doctor,
            'role_id' => 1,
            'user_id' => $user->id ,

        ]);

        $cabinet = Cabinet::create([
            'name_cabinet' => $this->name_cabinet,
            'email_cabinet' => $this->email_cabinet,
            'phone_cabinet' => $this->phone_cabinet,
            'type_id' =>$this->type_id,
            'doctor_id' => $doctor->id,
        ]);
        $message = "L'utilisateur a été Crée";
        session()->flash('newUserAdded', $message);
        $this->resetFormSubmitted();
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
        $types = TypeCabinet::where('status',0)->get();
        $users = User::where('delete', 0)
            ->orderBy('id', 'ASC')->paginate(2);
        return view('livewire.admin.users.admin-add-users-component', ['users' => $users,'types'=>$types])->layout('layouts.primary');
    }
}
