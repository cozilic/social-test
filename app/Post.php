<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cog\Contracts\Love\Likeable\Models\Likeable as LikeableContract;
use Cog\Laravel\Love\Likeable\Models\Traits\Likeable;


class Post extends Model implements LikeableContract
{
    use Likeable;

    Protected $fillable = [
        'user_id', 'body', 'visibility', 'image'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    static function getpost()
    {
        return Post::orderBy('created_at','desc')->whereVisibility('public')->paginate(10);
    }
    static function parseText($data)
    {
            $pat = array('/#(\w+)/', '/@(\w+)-./');
            $rep = array('<font color="purple">#$1</font>', '<a href="/user/$1">@$1</a>');
            // Notify users here
            $data = preg_replace($pat, $rep, $data);

        $data = nl2br($data);
        $data = str_replace('','',$data);
        return $data;
    }
    static function parseHash($data)
    {
        $test = collect($data);
        preg_match_all('/(#\w+)/', $test, $matches);
        foreach($matches as $key=>$value){
            $matches[$key]=str_replace("#","",$value);
        }
        $hashes = serialize($matches[0]);
        return $hashes;
    }
    static function unHash($data)
    {
        return unserialize($data);
    }
}
