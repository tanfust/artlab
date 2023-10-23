<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Article extends Model
 {
    use HasFactory;
    protected $fillable = [ 'user_id', 'title', 'content', 'image', 'isPublished' ];

    public function Creator()
 {
        return $this->belongsTo( 'Creator' );
        
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}

    // to be deleted after merging
    public static function boot()
    {
        parent::boot();
        static::creating(function ($article) {
            $article->user_id = Auth::id(); // Set the default value for isPublished
        });
    }
}

