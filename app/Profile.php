<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Profile extends Model
{
    protected $fillable = [
        'bio','avatar','user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    static function getSocial()
    {
        $profile = Auth::user()->profile;
        return $profile;
    }
}
