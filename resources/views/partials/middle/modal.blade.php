<div class="modal fade" id="modal-{{$post->user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body">
                    <div class="card profile-card-2">
                            <div class="card-img-block">
                                <img class="img-fluid" src="{{$post->user->profile->bgimage}}" alt="Card image cap" />
                            </div>
                            <div class="card-body pt-5">
                                <img src="{{$post->user->profile->avatar}}" alt="profile-image" width="100" height="75" class="profile"/>
                                <h5 class="card-title">{{$post->user->name}}</h5>
                                <p class="card-text">{{$post->user->profile->bio}}</p>
                                <div class="icon-block">
                                    @if (!$post->user->profile->facebook_username == null)
                                    <a href="http://facebook.com/{{$post->user->profile->facebook_username}}"> <i class="fa fa-facebook"></i></a>
                                    @endif
                                    @if (!$post->user->profile->twitter_username == null)
                                    <a href="http://twitter.com/{{$post->user->profile->twitter_username}}"><i class="fa fa-twitter"></i></a>
                                    @endif
                                    @if (!$post->user->profile->google_username == null)
                                    <a href="http://plus.google.com/{{$post->user->profile->google_username}}"> <i class="fa fa-google-plus"></i></a>
                                    @endif

                                </div>
                            </div>
                        </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="location.href='{{ route('follow',$post->user) }}'">Follow</button>

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
