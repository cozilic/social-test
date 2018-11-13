<div class="col-md-3">
        <div class="card gedf-card shadow">
            <div class="card-body">
                <h5 class="card-title">Top 5 Tags</h5>
                <h6 class="card-subtitle mb-2 text-muted">Most used tags</h6>
                <p class="card-text">
@foreach (App\Post::getTopTags()->take(5) as $item)
<a href="{{route('get.tags', $item->tag)}}" class="badge badge-primary">{{$item->tag}}</a>
@endforeach
                </p>
                    {{--  <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>  --}}
            </div>
        </div>

        <div class="card gedf-card shadow">
                <div class="card-body">
                    <h5 class="card-title">Search Tags</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Find the tag you are looking for</h6>
                    <p class="card-text">
                        <form action="">
                            <input class ="form-control" type="text">
                        </form>
                    </p>
                        {{--  <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>  --}}
                </div>
            </div>
