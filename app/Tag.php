<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'post_id','tag',
    ];
    public function post()
    {
        return $this->belongsToMany(Post::class);
    }
}
