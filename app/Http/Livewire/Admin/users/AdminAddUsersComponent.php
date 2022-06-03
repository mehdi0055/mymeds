<?php

namespace App\Http\Livewire\Admin\Users;



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
    public $name;
    public $email;
    public $password;
    public $profile;

    public function resetFormSubmitted()
    {
        $this->name = "";
        $this->email = "";
    }

      //check validation after the user finish typing in the fields
      public function updated($fields)
      {
          $this->validateOnly($fields, [
              'name' => 'required',
              'email' => 'required|email',
          ]);
      }


    public function addNewUser()
    {
        $this->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
        ]);

        if ($this->profile) {
            $imagename = Carbon::now()->timestamp . '.' . $this->profile->extension();
            $this->profile->storeAs('primary/assets/images/users/', $imagename);
        } else {
             $imagename = "male.png";
        }

        $password = "123456789";
        $this->password = Hash::make($password);

            User::insert([
                'name' => Str::upper($this->name),
                'email' => $this->email,
                'password' => $this->password,
                'profile_photo_path' => $imagename,
                'utype' => 'ADM',
            ]);

        $message = "L'utilisateur a été Crée";
        session()->flash('newUserAdded', $message );
        $this->resetFormSubmitted();
    }



    use WithPagination;
    public function render()
    {

        $users = User::where('delete',0)
        ->orderBy('id', 'ASC')->paginate(2);
        return view('livewire.admin.users.admin-add-users-component',['users'=>$users])->layout('layouts.primary');
    }
}
