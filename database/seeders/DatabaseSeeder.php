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
                'phone'=>'0625223212',
                'password'=> Hash::make('123456789'),
                'utype' => 'ADM'
            ]
            );

            DB::table('users')->insert(
                [
                    'name'=>'user',
                    'email'=>'user@mymed.ma',
                    'phone'=>'0632652212',
                    'password'=> Hash::make('123456789'),
                    'utype' => 'USR'
                ]
                );

                DB::table('type_cabinets')->insert(
                    [
                        'name'=>'Cabinet Dentist',
                    ]
                    );
                    DB::table('type_cabinets')->insert(
                        [
                            'name'=>'Cabinet Doctor general',
                        ]
                        );
                        DB::table('type_cabinets')->insert(
                            [
                                'name'=>'Cabinet Doctor specialist',
                            ]
                            );
    }
}
