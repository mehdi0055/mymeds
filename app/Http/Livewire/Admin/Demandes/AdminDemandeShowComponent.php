<?php

namespace App\Http\Livewire\Admin\Demandes;

use App\Models\Cabinet;
use Livewire\Component;
use App\Models\Demande;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class AdminDemandeShowComponent extends Component
{

    public $idDemande;
    public $demandes;

    public function mount($idDemande)
    {
        $this->idDemande = $idDemande;
    }

    public function valideDemande($id)
    {
        $demande = Demande::find($id);
        $demande->update([
            'status' => 1,
        ]);

        // dd($demande);
        $password = Hash::make('123456789');
        $fullname = $demande->fname . ' ' . $demande->lname;
        $slug = Str::slug($fullname);
        // dd($slug);
        $user = User::create([
            'name' => $fullname ,
            'slug' =>$slug,
            'email' => $demande->email,
            'password' => $password,
        ]);

        $doctor = Doctor::create([
            'fname' => $demande->fname,
            'lname' => $demande->lname,
            'email_personel' => $demande->email,
            'cin' => $demande->cin,
            'phone_personel' => $demande->phone,
            'code_doctor' => $demande->code_doctor,
            'state' => $demande->state,
            'zipcode' => $demande->zipcode,
            'address' => $demande->address,
            'user_id' => $user->id,

        ]);


        $cabinet = Cabinet::create([
            'name_cabinet' => $demande->name_cabinet,
            'email_cabinet' => $demande->email_cabinet,
            'phone_cabinet' => $demande->phone_cabinet,
            'address_cabinet' => $demande->address_cabinet,
            'logo_cabinet' => $demande->logo_cabinet,
            'theme_cabinet' => User::find($user->id)->theme,
            'type_id' => $demande->type_id,
            'doctor_id' => $doctor->id,
        ]);

        session()->flash('message_success', 'Demand has been successfully accepted');

    }

    public function refuseDemande($id)
    {
        $demande = Demande::find($id);
        $demande->update(['status' => 2]);
        session()->flash('message_danger', 'Demand has been successfully rejected');
    }

    public function render()
    {
        $this->demandes = Demande::find($this->idDemande);
        return view('livewire.admin.demandes.admin-demande-show-component')->layout('layouts.primary');
    }
}
