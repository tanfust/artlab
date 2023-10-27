<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
    use HasFactory;
    protected  $fillable = [ 'gallery_id', 'imageName','Price','id','Description','Name'];
}
