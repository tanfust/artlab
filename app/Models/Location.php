<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event; 
class Location extends Model
{
    protected $fillable = ['name', 'address'];
    use HasFactory;
    protected $table = 'locations'; 
    protected $primaryKey = 'id'; 
    public function events()
    {
        return $this->hasMany(Event::class );
    }
}
