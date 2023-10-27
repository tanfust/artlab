<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public function artworks()
    {
        return $this->hasMany(Artwork::class);
    }
    use HasFactory;
    protected  $fillable = ['user_id', 'galleryName', 'photo'];
}
