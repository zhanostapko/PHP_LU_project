<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'author',
        'body',
        'commentable_id',
        'commentable_type',
    ];
    public function commentable()
    {
        return $this->morphTo();
    }
}
