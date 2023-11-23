<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $us = User::where("email","naph@gmail.com")->first();
        if($us == null){
            $user = new User();
            $user->name = "Naph";
            $user->email = "naph@gmail.com";
            $user->phone = "+254727991993";
            $user->password = Hash::make("Naphtali@2023");
            $user->save();
        }
    }
}
