<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'ticket_id'
    ];

    public function Ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
