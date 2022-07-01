<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class InstallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->first_name = "israa";
        $user->last_name = "elhalaby";
        $user->username = "israa";
        $user->password = Hash::make('123456');
        $user->role = 1;
        $user->save();
    }
}
