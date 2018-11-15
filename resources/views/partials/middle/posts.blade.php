@if (!App\Post::getpost()->count())
<div class="card shadow">
            <div class="card-body">
                @if (!Request()->query('tag'))
                <div class="text-muted h7 mb-2">No Posts.</div>
                <p class="card-text">
                    <h3>Nothing found!</h3>
                    No post was found in the system.. maybe you could be the first!!.
                </p>
            </div>

                    @else
                    <div class="text-muted h7 mb-2">Tag not found.</div>
                    <p class="card-text">
                        <h3>Not found!</h3>
                        The tag: <strong>#{{Request()->query('tag')}}</strong> was not found in our system.<br />Check that the spelling was correct and try again.
                    </p>
                </div>

                @endif

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
                        @if ($post->visibility == 'private')
                            <span class="text-danger">Private</span> <i class="fas fa-lock" style="color: red"></i> <span class="text-muted"><small>(Only you see this)</small></span>
                        @endif
                        @if ($post->visibility == 'friends')
                            <span class="text-primary">Friends</span> <i class="fas fa-users" style="color: #38A1F3"></i> <span class="text-muted"><small>(Only your friends see this)</small></span>
                        @endif
                        @if ($post->visibility == 'public')
                            <span class="text-success">Public</span> <i class="fas fa-book-open" style="color: #5cb85c"></i> <span class="text-muted"><small>(Everyone can see this)</small></span>
                        @endif

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
                <img height="" width="" src="/uploads/{{$post->user->id}}/{{$post->image}}">
                @else
                {!! $post->body !!}
                @endif
            </p>
        </div>
        <div class="card-footer">
            @include('partials.middle.postfooter')
        </div>
    </div>
    {{--  @include('partials.replies.show')  --}}
    @endforeach
    {{--  {{App\Post::getpost()->links()}}  --}}
</div>
