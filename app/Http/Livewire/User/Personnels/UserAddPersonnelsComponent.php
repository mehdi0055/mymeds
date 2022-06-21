<?php

namespace App\Http\Livewire\User\Personnels;

use Livewire\Component;
use App\Models\Personnel;
use App\Models\User;
use App\Models\PersonnelHasAccount;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserAddPersonnelsComponent extends Component
{
    public $lname;
    public $fname;
    public $phone_personel;
    public $email_personel;
    public $cin;
    public $gender;
    public $profession;
    public $date_embauche;
    public $salaire;
    public $has_account;

    public function render()
    {
        $personnels = Personnel::paginate(3);
        return view('livewire.user.personnels.user-add-personnels-component', ['personnels' => $personnels])->layout('layouts.secondary');
    }

    public function store()
    {
        $this->validate([
            'lname' => 'required',
            'fname' => 'required',
            'phone_personel' => 'required|unique:personnels',
            'email_personel' => 'required|unique:personnels',
            'cin' => 'required|unique:personnels',
            'gender' => 'required',
            'profession' => 'required',
            'date_embauche' => 'required',
            'salaire' => 'required',
            'has_account' => 'required',
        ]);
        if ($this->has_account == "1") {
            $personnel = Personnel::create([
                'cabinet_id' => Auth::user()->doctor->cabinet->id,
                'lname' => $this->lname,
                'fname' => $this->fname,
                'phone_personel' => $this->phone_personel,
                'email_personel' => $this->email_personel,
                'cin' => $this->cin,
                'gender' => $this->gender,
                'profession' => $this->profession,
                'date_embauche' => $this->date_embauche,
                'salaire' => $this->salaire,
                'has_account' => $this->has_account,
            ]);

            $slug = Str::slug($this->lname . " " . $this->fname);
            $user = User::create([
                'name' => $this->lname . " " . $this->fname,
                'slug' => $slug,
                'email' => $this->email_personel,
                'password' => Hash::make('123456789'),
                'role_id' => 2,
            ]);
            PersonnelHasAccount::insert([
                'personnel_id' => $personnel->id,
                'user_id' => $user->id,
            ]);
        } else {
            $personnel = Personnel::create([
                'cabinet_id' => Auth::user()->doctor->cabinet->id,
                'lname' => $this->lname,
                'fname' => $this->fname,
                'phone_personel' => $this->phone_personel,
                'email_personel' => $this->email_personel,
                'cin' => $this->cin,
                'gender' => $this->gender,
                'profession' => $this->profession,
                'date_embauche' => $this->date_embauche,
                'salaire' => $this->salaire,
                'has_account' => $this->has_account,
            ]);
        }
    }
}
