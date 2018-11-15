<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Notification extends Model
{
    protected $fillable = [
        'from_user_id','to_user_id','type'
    ];

    static function addNotif($user,$type)
    {

        Notification::create([
            'from_user_id' => Auth::user()->id,
            'to_user_id' => $user->id,
            'type' => $type,
        ]);
    }
}
