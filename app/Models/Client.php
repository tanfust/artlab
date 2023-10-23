<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        // Add other fillable fields here
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
