<a class="dropdown-item" href="{{route('clear.mentions',Auth::user()->id)}}"><i class="fas fa-trash"> </i> Clear Notifications</a>
    <ul class="timeline" style="width: 100%;">
            <li>
                <a target="_blank" href="https://www.totoprayogo.com/#">New Web Design</a>
                <a href="#" class="float-right">21 March, 2014</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
            </li>
    </ul>
    <div class="dropdown-divider"></div>
    <ul class="timeline">
            <li>
                <a target="_blank" href="https://www.totoprayogo.com/#">New Web Design</a>
                <a href="#" class="float-right">21 March, 2014</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
            </li>
    </ul>
    <div class="dropdown-divider"></div>

    {{--
    <a class="dropdown-item" href="{{route('show.post',$mention->model_id)}}">
        <i class="far fa-bell"></i>
        {{ App\User::find($mention->model_id)->username}} @ {{$mention->created_at}}
    </a>
    --}}
