<?php

namespace App\Http\Livewire\User\Personnels;

use Livewire\Component;
use App\Models\Personnel;

class UserAddPersonnelsComponent extends Component
{
    public $lname;
    public $fname;
    public $phone_personel;
    public $email_personel;
    public $cin;
    public $gender;
    public $has_account;

    public function render()
    {
        $personnels = Personnel::paginate(3);
        return view('livewire.user.personnels.user-add-personnels-component', ['personnels' => $personnels])->layout('layouts.secondary');
    }

    public function store()
    {
        $data = $this->validate([
            'lname' => 'required',
            'fname' => 'required',
            'phone_personel' => 'required',
            'email_personel' => 'required',
            'cin' => 'required',
            'gender' => 'required',
            'has_account' => 'required',
        ]);
        Personnel::create($data);
    }
}
