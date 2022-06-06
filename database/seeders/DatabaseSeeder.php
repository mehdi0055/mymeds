<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

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

        DB::table('users')->insert(
            [
<<<<<<< HEAD
                'name'=>'admin',
                'email'=>'admin@mymed.ma',
                'phone'=>'0625223212',
                'password'=> Hash::make('123456789'),
                'utype' => 'ADM',
                'slug' => 'ADM'
=======
                'name' => 'admin',
                'email' => 'admin@mymed.ma',
                'phone' => '0625223212',
                'password' => Hash::make('123456789'),
                'utype' => 'ADM'
>>>>>>> 68568974a63a528e78e4420caabb24d0c493a71e
            ]
        );

<<<<<<< HEAD
            DB::table('users')->insert(
                [
                    'name'=>'user',
                    'email'=>'user@mymed.ma',
                    'phone'=>'0632652212',
                    'password'=> Hash::make('123456789'),
                    'utype' => 'USR',
                    'slug' => 'USR'
                ]
                );
=======
        DB::table('users')->insert(
            [
                'name' => 'user',
                'email' => 'user@mymed.ma',
                'phone' => '0632652212',
                'password' => Hash::make('123456789'),
                'utype' => 'USR'
            ]
        );
>>>>>>> 68568974a63a528e78e4420caabb24d0c493a71e

        DB::table('type_cabinets')->insert(
            [
                'name' => 'Cabinet Dentist',
            ]
        );
        DB::table('type_cabinets')->insert(
            [
                'name' => 'Cabinet Doctor general',
            ]
        );
        DB::table('type_cabinets')->insert(
            [
                'name' => 'Cabinet Doctor specialist',
            ]
        );
    }
}
