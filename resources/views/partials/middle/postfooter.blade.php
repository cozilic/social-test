  <span style="text-align:left;">
    @foreach ($post->tag as $tags)
    <a href="{{route('get.tags', $tags->tag)}}" class="badge badge-primary">{{$tags->tag}}</a>
    @endforeach
    <like post_id="{{$post->id}}" isliked="{{ $post->isLikedBy() }}" likes="{{$post->likesCount}}"></like>
        </small></span>
    </span>
</span>

