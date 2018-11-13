<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cog\Contracts\Love\Likeable\Models\Likeable as LikeableContract;
use Cog\Laravel\Love\Likeable\Models\Traits\Likeable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function tag()
    {
        return $this->belongsToMany(Tag::class);
    }
static function getTopTags()
{
    $tags = Tag::join('post_tag', 'post_tag.tag_id', '=', 'tags.id')
    ->groupBy('tags.tag')
    ->get(['tags.tag', DB::raw('count(tags.tag) as tag_count')])
    ->sortByDesc('tag_count');
        return $tags;

}
    static function getpost()
    {

        if (Request()->query('tag') !== null) {
            $tagName = Request()->query('tag');
            $posts = Post::whereHas('tag', function ($q) use($tagName) {
                $q->where('tag', $tagName);
            })->get();
            $posts = $posts->sortByDesc('created_at');
            return $posts;
            //dd($posts);
            // foreach ($tags as $tag) {
            // $posts = Post::whereId($tag->id)->get();
            // }
            // $posts = Post::with(['tag' => function ($query) {
            //     $query->where('tags.tag', 'LIKE','%'. Request()->query('tag').'%');
            // }])->latest()->get();
            // $private = Post::where('user_id', Auth::user()->id)->whereVisibility('private')->get();
            // foreach ($private as $key => $value) {
            //     $posts->push($value);
            // }
            //$posts = $posts->sortByDesc('created_at');
            // dd($posts);

        }else{


            $posts = Post::whereVisibility('public')->latest()->get(); // original
            $private = Post::where('user_id', Auth::user()->id)->whereVisibility('private')->latest()->get();
            foreach ($private as $key => $value) {
                $posts->push($value);
            }
            $posts = $posts->sortByDesc('created_at');
            //dd($posts);
            return $posts;
        }
    }
    static function parseText($data)
    {
            $pat = array('/\#([a-zA-Z0-9\.\-\&]+)/', '/@(\w+)-./', '/(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9]\.[^\s]{2,})/');
            $rep = array('<font color="Orange"><strong>#$1</strong></font>', '<a href="/user/$1">@$1</a>','<a rel="external" target="_blank" href="$1">$1</a>');
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
static function parseHashtags($text,$latestpost) {

        //$test = collect($text);
        preg_match_all('/\#([a-zA-Z0-9\.\-\&]+)/', $text, $matches);
        foreach ($matches[0] as $key => $value) {
            $value = str_replace('#','',$value);
            $tag = Tag::create([
                'tag' => $value,
                ]);
                $latestpost->tag()->attach($tag);
                // dd($latestpost);
            }
            // foreach ($matches[0] as $value) {
            //     $value = str_replace('#','',$value);
            //             $tag->post()->attach($value);
            // }
            //dd($matches);
//        return $result;
	}

    static function unHash($data)
    {
        //dd(unserialize($data));
        return unserialize($data);
    }
}
