<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cog\Contracts\Love\Likeable\Models\Likeable as LikeableContract;
use Cog\Laravel\Love\Likeable\Models\Traits\Likeable;
use Illuminate\Support\Facades\Auth;

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
        // $posts = Post::orderBy('created_at','desc')->whereVisibility('public')->whereVisibility->paginate(10); // original
        $posts = Post::orderBy('created_at','desc')->whereVisibility('public')->paginate(10);
        $private = Post::orderBy('created_at','desc')->where('user_id', Auth::user()->id)->whereVisibility('private')->paginate(10);
        foreach ($private as $key => $value) {
            $posts->push($value);
        }
        $posts = $posts->sortByDesc('created_at');
        //dd($sorted);

        //dd($posts);
        return $posts;
    }
    static function parseText($data)
    {
            $pat = array('/\#([a-zA-Z0-9\.\-\&]+)/', '/@(\w+)-./', '/(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9]\.[^\s]{2,})/');
            $rep = array('<font color="gray"><strong>#$1</strong></font>', '<a href="/user/$1">@$1</a>','<a rel="external" target="_blank" href="$1">$1</a>');
            // Notify users here
            $data = preg_replace($pat, $rep, $data);

            $data = nl2br($data);
            //$data = str_replace(':','&#58',$data);
            //dd($data);
            return $data;
    }


    /**
 * Method to parse and store hashtags
 *
 * @param	string			hashtag
 *
 * @return	boolean
 * @since	2.3
 */
static function parseHashtags($text) {

        $test = collect($text);
        preg_match_all('/\#([a-zA-Z0-9\.\-\&]+)/', $test, $matches);
        //dd($matches[0]);
        foreach($matches as $key=>$value){
            $matches[$key]= str_replace("#","",$value);
        }
        //dd($value);
        $hashes = serialize($matches[0]);
        $hashes = strtolower($hashes);
        return $hashes;
	}

    static function unHash($data)
    {
        //dd(unserialize($data));
        return unserialize($data);
    }
}
