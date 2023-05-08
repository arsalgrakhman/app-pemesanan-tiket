<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TicketDetail;

class TicketDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new TicketDetail;
        $user->status = 'belum terpakai';
        $user->ticket_id = 1;

        $user->save();
    }
}
