<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;

class Event extends Model
{
    protected $fillable = ['title', 'description', 'date', 'location_id'];
    use HasFactory;
    protected $table = 'events';
    protected $primaryKey = 'id';
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
