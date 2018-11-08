  <span style="text-align:left;">
    @foreach (App\Post::unHash($post->tags) as $item)
    <a href="#" class="badge badge-primary">{{$item}}</a>
    @endforeach
    <like post_id="{{$post->id}}" isliked="{{ $post->isLikedBy() }}" likes="{{$post->likesCount}}"></like>
        </small></span>
    </span>
</span>

