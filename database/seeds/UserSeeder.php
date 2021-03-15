<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('123123'),
            'role_id' => 1,
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => '@gmail.com',
            'password' => Hash::make('123123'),
            'role_id' => 2,
            ]);
        // DB::table('users')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('123123'),
        //     'role_id' => 1,
        // ]);
    }
}
