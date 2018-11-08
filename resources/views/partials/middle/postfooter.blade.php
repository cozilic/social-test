  <span style="text-align:left;">
      {{--  @php

      $a = array();
      $a[0] = unserialize($post->tags);
    @endphp  --}}
    @foreach (App\Post::unHash($post->tags) as $item)
    <a href="#" class="badge badge-primary">{{$item}}</a>
    @endforeach
    <like post_id="{{$post->id}}" isliked="{{ $post->isLikedBy() }}" likes="{{$post->likesCount}}"></like>
            {{--  <a href="#" class="card-link"><i class="fas fa-users"></i> Follow</a>
        <a href="#" class="card-link"><i class="fas fa-share"></i> Share</a>  --}}

        {{--  <span style="float:right;">
        <span class="text-muted"><small>
            <likes likes="{{$post->likesCount}}" post_id="{{$post->id}}"></likes>  --}}
        {{--  @if ($post->likesCount <= '1')
        {{$post->likesCount}} Like
        @else
        {{$post->likesCount}} Likes
        @endif  --}}
        </small></span>
    </span>
</span>

