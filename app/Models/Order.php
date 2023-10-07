<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'artwork_id',
        'totalAmount',
        'status',
        'description',
        'image',
        'client',
        'title'
        // Add other fillable fields here
    ];

    // Define relationships
    public function artwork()
    {
        return $this->belongsTo('Artwork');
    }
}
