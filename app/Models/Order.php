<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\User;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'totalAmount',
        'status',
        'description',
        'image',
        'client_id',
        "user_id",
        'title'
        // Add other fillable fields here
    ];

    // Define relationships

    /**
     * Get the user that owns the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')->withDefault();
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id')->withDefault();
    }


}
