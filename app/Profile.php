<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'bio','avatar','user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
