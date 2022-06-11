<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Role;
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


        $name = 'admin-admin';
        $slug = Str::slug($name);

        User::create(
            [
                'name' => 'admin',
                'email' => 'admin@mymed.ma',
                'password' => Hash::make('123456789'),
                'utype' => 'ADM',
                'slug' => $slug,
            ]
        );


        $name = 'user-user';
        $slug = Str::slug($name);
        User::create(
            [
                'name' => 'user',
                'email' => 'user@mymed.ma',
                'password' => Hash::make('123456789'),
                'utype' => 'USR',
                'slug' => $slug,
            ]
        );

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
    }
}
