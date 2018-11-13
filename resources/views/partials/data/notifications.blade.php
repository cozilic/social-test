<a class="dropdown-item" href="{{route('clear.mentions',Auth::user()->id)}}"><i class="fas fa-trash"> </i> Clear Notifications</a>
<div class="list-group d-inline-flex">
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Notification!</h5>
            <small>3 days ago</small>
          </div>
          <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
          <small>Donec id elit non mi porta.</small>
        </a>
      </div>
    {{--  <div class="dropdown-divider"></div>  --}}

    {{--
    <a class="dropdown-item" href="{{route('show.post',$mention->model_id)}}">
        <i class="far fa-bell"></i>
        {{ App\User::find($mention->model_id)->username}} @ {{$mention->created_at}}
    </a>
    --}}
