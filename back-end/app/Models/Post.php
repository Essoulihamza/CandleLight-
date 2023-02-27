<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    
    protected $table = 'posts';
    protected $fillable = [
        'user_id', 'title', 'content', 'image'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function like() 
    {
        return $this->hasMany(Like::class);
    }
    public function Comment() 
    {
        return $this->hasMany(Comment::class);
    }
}
