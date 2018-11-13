<div class="card gedf-card shadow">
        <div class="card-body">
            <h5 class="card-title">Top 5 Tags</h5>
            <h6 class="card-subtitle mb-2 text-muted">Most used tags</h6>
            <p class="card-text">
                <ol>
@foreach (App\Post::getTopTags()->take(5) as $item)
    <li>
        <a href="{{route('get.tags', $item->tag)}}" class="badge badge-primary">{{$item->tag}}</a>
    </li>
    @endforeach
</ol>
            </p>
                {{--  <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>  --}}
        </div>
    </div>
