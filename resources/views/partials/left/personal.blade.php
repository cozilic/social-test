<div class="col-md-3">
    <div class="card shadow">

        <div class="twPc-div">
                <a class="twPc-bg twPc-block" style="background-image: url('{{Auth::user()->profile->bgimage}}')"></a>

                <div>
                        <div class="twPc-button">
                                <div class="dropdown">
                                        <button class="button_hide dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
                                                <i class="fas fa-cogs" style="color:#38A1F3"></i>
                                           <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                            <a class="dropdown-item" href="#"><i class="fas fa-edit"></i> Edit Profile</a>
                                        </ul>
                                      </div>
                                {{--  <a href=""><i class="fas fa-cogs" style="color:#38A1F3"></i></a>  --}}
                            </div>
                    <a title="{{Auth::user()->name}}" href="#" class="twPc-avatarLink">
                        <img src="{{Auth::user()->profile->avatar}}" class="twPc-avatarImg">
                    </a>

                    <div class="twPc-divUser">
                        <div class="twPc-divName">
                            <a href="#">{{Auth::user()->name}}</a>
                        </div>
                        <span>
                            <a href="/user/{{Auth::user()->username}}">@<span>{{Auth::user()->username}}</span>
                            </a>
                            @if (Auth::user()->hasRole('admin'))
                            <span class="text-muted">
                                <small>
                                    @foreach (Auth::user()->roles as $role)
                                        ({{ucfirst($role->name)}})
                                    @endforeach
                                </small>
                            </span>
                            @endif
                        </span>
                    </div>

                    <div class="twPc-divStats">
                        <ul class="twPc-Arrange">
                            <li class="twPc-ArrangeSizeFit">
                                    <a href="#" title="{{App\Post::where('user_id',Auth::user()->id)->count()}} Posts">
                                    <span class="twPc-StatLabel twPc-block">Posts</span>
                                    <span class="twPc-StatValue">
                                        {{App\Post::where('user_id',Auth::user()->id)->count()}}
                                    </span>
                                </a>
                            </li>
                            <li class="twPc-ArrangeSizeFit">
                                <a href="{{route('following')}}" title=" Following">
                                    <span class="twPc-StatLabel twPc-block">Following</span>
                                    <span class="twPc-StatValue">{{Auth::user()->following->count()}}</span>
                                </a>
                            </li>
                            <li class="twPc-ArrangeSizeFit">
                                <a href="{{route('followers')}}" title=" Followers">
                                    <span class="twPc-StatLabel twPc-block">Followers</span>
                                    <span class="twPc-StatValue">{{Auth::user()->followers->count()}}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <ul class="list-group list-group-flush">
            {{--  <li class="list-group-item">
            </li>  --}}
            <li class="list-group-item">

            </li>
        </ul>
    </div>
</div>
