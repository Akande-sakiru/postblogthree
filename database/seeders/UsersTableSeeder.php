<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bests')->insert([
            'name' => 'Doe',
            'email' => 'J@doe.com',
            'password' => Hash::make('12345')
        ]);
    }
}
