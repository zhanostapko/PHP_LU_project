<?php

namespace App\Models;

use Database\Factories\PostFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'author_name',
    ];
    protected static function newFactory()
    {
        return new PostFactory();
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
