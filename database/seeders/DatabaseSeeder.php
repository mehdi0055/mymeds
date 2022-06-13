<?php

namespace Database\Seeders;

use App\Models\Cabinet;
use App\Models\Doctor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Role;
use App\Models\Permission;
use App\Models\User;
use App\Models\TypeCabinet;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        Permission::create(
            [
                'name' => 'Ajouter',
                'slug' => 'add-add',
            ]
        );

        Permission::create(
            [
                'name' => 'Supprimer',
                'slug' => 'delete-delete',
            ]
        );


        Role::create(
            [
                'name' => 'Owner',
                'description' => 'propriétaire du cabinet',
            ]
        );

        Role::create(
            [
                'name' => 'Personel',
                'description' => 'personnel dispose d\'un accèss  spécifique',
            ]
        );


        $name = 'admin-admin';
        $slug = Str::slug($name);

        User::create(
            [
                'name' => 'admin',
                'email' => 'admin@mymed.ma',
                'password' => Hash::make('123456789'),
                'utype' => 'ADM',
                'slug' => $slug,
                'role_id' => 1,
            ]
        );


        $name = 'user-user';
        $slug = Str::slug($name);
        $user = User::create(
            [
                'name' => 'Mehdi El mir',
                'email' => 'user@mymed.ma',
                'password' => Hash::make('123456789'),
                'utype' => 'USR',
                'slug' => $slug,
                'role_id' => 1,
            ]
        );

        $doctor = Doctor::create([
            'fname' => 'Mehdi',
            'lname' => 'El mir' ,
            'email_personel' => 'Mehdi@gmail.com',
            'cin' => 'D55621',
            'code_doctor' => 'DR1',
            'user_id' => $user->id ,
        ]);


        $name = 'Cabinet Dentaire';
        $slug = Str::slug($name);
        DB::table('type_cabinets')->insert(
            [
                'name' => 'Cabinet Dentist',
                'slug' => $slug,
            ]
        );

        $name = 'Cabinet Medical generaliste';
        $slug = Str::slug($name);

        TypeCabinet::create(
            [
                'name' => 'Cabinet Doctor general',
                'slug' => $slug,
            ]
        );

        $name = 'Cabinet Medical specialiste';
        $slug = Str::slug($name);
        TypeCabinet::create(
            [
                'name' => 'Cabinet Medical specialiste',
                'slug' => $slug,
            ]
        );

        $cabinet = Cabinet::create([
            'name_cabinet' => 'Cabinet mehdi',
            'email_cabinet' => 'CabinetMehdi@gmail.com',
            'phone_cabinet' => '0622521452',
            'type_id' =>1,
            'doctor_id' => $doctor->id,
        ]);


    }
}
