<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ticket;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new Ticket;
        $user->name = 'Burhan';
        $user->email = 'burhan@gmail.com';
        $user->phone_number = mt_rand(1000000, 9000000);

        $user->save();
    }
}
