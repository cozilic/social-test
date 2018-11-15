@if (Auth::user()->notifications->isEmpty())
<span class="dropdown-item text-muted">No Notifications</span>
@else
<a class="dropdown-item" href="{{route('clear.mentions',Auth::user()->id)}}"><i class="fas fa-trash"> </i> Clear Notifications</a>
@foreach (Auth::user()->notifications as $key => $item)
<a class="dropdown-item" href="#"><i class="fas fa-user"> </i> {{'@'.App\User::find($item->from_user_id)->username}} mentioned you in Post_id</a>
@endforeach
@endif
    {{--  <div class="dropdown-divider"></div>  --}}

    {{--
    <a class="dropdown-item" href="{{route('show.post',$mention->model_id)}}">
        <i class="far fa-bell"></i>
        {{ App\User::find($mention->model_id)->username}} @ {{$mention->created_at}}
    </a>
    --}}
