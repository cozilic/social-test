<a class="dropdown-item" href="{{route('clear.mentions',Auth::user()->id)}}"><i class="fas fa-trash"> </i> Clear Notifications</a>
<div class="dropdown-divider"></div>

    <a class="dropdown-item dropdown-notification" href="">

    </a>

    {{--
    <a class="dropdown-item" href="{{route('show.post',$mention->model_id)}}">
        <i class="far fa-bell"></i>
        {{ App\User::find($mention->model_id)->username}} @ {{$mention->created_at}}
    </a>
    --}}
