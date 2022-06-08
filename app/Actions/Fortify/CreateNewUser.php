<?php

namespace App\Actions\Fortify;

use App\Models\Demande;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:demandes'],
            'phone' => ['required', 'string', 'max:255','unique:demandes'],
            'cin' =>['required', 'string', 'max:255','unique:demandes'],
            'code_doctor' => ['required', 'string', 'max:255','unique:demandes'],
            'name_cabinet' =>['required', 'string', 'max:255','unique:demandes'],
            'phone_cabinet' =>['required', 'string', 'max:255','unique:demandes'],
            'email_cabinet' =>['required', 'string', 'max:255','unique:demandes'],
            'type_id' =>['required'],
            // 'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        // User::create([
        //     'name' => $input['name'],
        //     'email' => $input['email'],
        //     'password' => Hash::make($input['password']),
        // ]);

        Demande::create(
            [
                'fname' => $input['fname'],
                'lname' => $input['lname'],
                'email' => $input['email'],
                'phone' => $input['phone'],
                'cin' => $input['cin'],
                'code_doctor' => $input['code_doctor'],
                'state' => $input['state'],
                'city' => $input['city'],
                'zipcode' => $input['zipcode'],
                'address' => $input['address'],
                'name_cabinet' => $input['name_cabinet'],
                'phone_cabinet' => $input['phone_cabinet'],
                'email_cabinet' => $input['email_cabinet'],
                'type_id' => $input['type_id'],
                'address_cabinet' => $input['address_cabinet']
            ]
        );
        
        session()->flash('success_message','Thank you');
        return redirect()->route('register');
    }
}
