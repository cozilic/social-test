<div class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow justify-content-between">
        <a class="navbar-brand" href="#">Socia<span style="color:#38A1F3">lite</span> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

    <ul class="navbar-nav mr-auto">
                    @guest
                    <ul class="navbar-nav">
                            <li class="nav-item">
                              <a class="nav-link" href="{{route('register')}}">Register</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{route('login')}}">Login</a>
                            </li>
                        </ul>
                    @else
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                              <li class="nav-item active">
                                <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="/friends">Friends <span class="badge badge-primary">0</span></a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="/messages">Messages <span class="badge badge-primary">0</span></a>
                              </li>
                              <li class="nav-item dropdown" style="max-width: 1200px;">
                                      <a class="nav-link dropdown-toggle" href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Notifications <span class="badge badge-primary">0</span> <i class="fas fa-caret-down"></i>
                                      </a>

                                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                  @include('partials.data.notifications')
                                              </div>
                              </li>
                              @if(Auth::user()->hasRole('admin'))
                              @include('partials.admin.nav')
                              @endif

                            </ul>

                </ul>
        <ul class="navbar-nav">
                <li class="nav-item dropleft">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          {{Auth::user()->name}}
                        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{route('show.profile',Auth::user()->id)}}"><i class="fas fa-user-circle"></i> My Profile</a>
          <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="{{ url('/logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                   <i class="fas fa-sign-out-alt"></i> Logout
                      </a>

                      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
        </div>
        </li>
        @endguest

        </ul>
    </div>
