<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
 {
    use HasFactory;
    protected $fillable = [ 'creator_id', 'title', 'content', 'image', 'isPublished' ];

    public function Creator()
 {
        return $this->belongsTo( 'Creator' );
        
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    // to be deleted after merging
    public static function boot()
    {
        parent::boot();
        static::creating(function ($article) {
            $article->creator_id = 1; // Set the default value for isPublished
        });
    }
}

