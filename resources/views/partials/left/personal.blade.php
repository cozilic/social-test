<div class="col-md-3">
    <div class="card shadow">
        <div class="card-body">
            <div class="h5">{{'@' .$user->username}}</div>
            <div class="h7 text-muted">Fullname : {{$user->name}}</div>
            <div class="h7">{{$user->profile->bio ?? ''}}
            </div>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <div class="h6 text-muted">Followers</div>
                <div class="h5">5.2342</div>
            </li>
            <li class="list-group-item">
                <div class="h6 text-muted">Following</div>
                <div class="h5">6758</div>
            </li>
            <li class="list-group-item">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni dolorem quis, labore officiis facere deserunt eum illum! Blanditiis incidunt beatae dolore minima, cupiditate veritatis praesentium perspiciatis consequuntur doloremque dignissimos obcaecati?</li>
        </ul>
    </div>
</div>
