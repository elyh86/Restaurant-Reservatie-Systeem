<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'reservation_date',
        'number_of_guests',
        'special_requests',
        'status',
    ];

    protected $casts = [
        'reservation_date' => 'datetime',
        'number_of_guests' => 'integer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
