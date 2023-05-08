<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User;
        $user->name = 'Admin';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('admin123');
        $user->save();
    }
}
