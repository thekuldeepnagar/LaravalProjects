<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name'=>'Lalu kumar',
            'email'=>'lalu123@gmail.com',
            'mobile'=>'6350254152',
            'password'=>Hash::make('1234')
        ]);   
     }
}
