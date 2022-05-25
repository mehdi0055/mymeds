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
                'name'=>'admin',
                'email'=>'admin@mymed.ma',
                'password'=> Hash::make('123456789'),
                'utype' => 'ADM'
            ]
            );

            DB::table('users')->insert(
                [
                    'name'=>'user',
                    'email'=>'user@mymed.ma',
                    'password'=> Hash::make('123456789'),
                    'utype' => 'USR'
                ]
                );
    }
}
