<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Guney Dirim",
            "email" => "guneydirim@gmail.com",
            "password" => bcrypt("75787578")
        ]);
    }
}
