<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
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
            'name' => 'Bonareri',
            'email'=>'mercy@email.com',
            'password' => Hash::make('Client.2019'),
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Claude',
            'email'=>'claude@email.com',
            'password' => Hash::make('Client.2019'),
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}