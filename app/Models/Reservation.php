<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table = 'reservations';

    protected $fillable = [
        'name',
        'email',
        'auction_id',
        'reservation_date',
    ];

    public function auction()
    {
        return $this->belongsTo(Auction::class);
    }

}


