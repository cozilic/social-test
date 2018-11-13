@if (App\Post::getpost()->count() == 0)
<div class="card gedf-card shadow">
            <div class="card-body">
                <div class="text-muted h7 mb-2">Tag not found.</div>
                <p class="card-text">
                    <h3>Not found!</h3>
                    The tag: <strong>#{{Request()->query('tag')}}</strong> was not found in our system.<br />Check that the spelling was correct and try again.
                </p>
            </div>
            <div class="card-footer">
                <a href="/home">Go to home</a>
                {{--  @include('partials.middle.postfooter')  --}}
            </div>
        </div>
@endif
@foreach (App\Post::getpost() ?? '' as $post)
<div class="card gedf-card shadow">
    <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mr-2">
                        <img class="rounded-circle" width="45" src="{{$post->user->profile->avatar ?? '' }}" alt="">
                    </div>
                    <div class="ml-2">
                            <!-- Button trigger modal -->
                            @include('partials.middle.modal')
                            <div class="h5 m-0"><a data-toggle="modal" data-target="#modal-{{$post->user->id}}" href="#">{{'@' . $post->user->username}}</a></div>
                        <div class="h7 text-muted">{{$post->user->name}}</div>
                    </div>
                </div>
                <div>
                    <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-h"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                            <div class="h6 dropdown-header">Configuration</div>
                            <a class="dropdown-item" href="#">Save</a>
                            <a class="dropdown-item" href="#">Hide</a>
                            <a class="dropdown-item" href="#">Report</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="card-body">
            <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>{{$post->created_at->diffForHumans()}}</div>
            <p class="card-text">
                @if (!$post->image == null)
                {!! $post->body !!}<hr><span class="text-muted"><small>attached image</small></span><br />
                <img height="200" width="400" src="/uploads/{{$post->user->id}}/{{$post->image}}">
                @else
                {!! $post->body !!}
                @endif
            </p>
        </div>
        <div class="card-footer">
            @include('partials.middle.postfooter')
        </div>
    </div>
    @endforeach
    {{--  {{App\Post::getpost()->links()}}  --}}
</div>
