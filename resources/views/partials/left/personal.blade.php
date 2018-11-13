<div class="col-md-3">
    <div class="card shadow">

        <div class="twPc-div">
                <a class="twPc-bg twPc-block" style="background-image: url('{{Auth::user()->profile->bgimage}}')"></a>

                <div>
                    <div class="twPc-button">
                        <button class="btn btn-primary">Follow me</button>
                    </div>

                    <a title="{{Auth::user()->name}}" href="#" class="twPc-avatarLink">
                        <img src="{{Auth::user()->profile->avatar}}" class="twPc-avatarImg">
                    </a>

                    <div class="twPc-divUser">
                        <div class="twPc-divName">
                            <a href="#">{{Auth::user()->name}}</a>
                        </div>
                        <span>
                            <a href="/user/{{Auth::user()->username}}">@<span>{{Auth::user()->username}}</span></a>
                        </span>
                    </div>

                    <div class="twPc-divStats">
                        <ul class="twPc-Arrange">
                            <li class="twPc-ArrangeSizeFit">
                                <a href="https://twitter.com/mertskaplan" title="9.840 Tweet">
                                    <span class="twPc-StatLabel twPc-block">Tweets</span>
                                    <span class="twPc-StatValue">9.840</span>
                                </a>
                            </li>
                            <li class="twPc-ArrangeSizeFit">
                                <a href="https://twitter.com/mertskaplan/following" title="885 Following">
                                    <span class="twPc-StatLabel twPc-block">Following</span>
                                    <span class="twPc-StatValue">885</span>
                                </a>
                            </li>
                            <li class="twPc-ArrangeSizeFit">
                                <a href="https://twitter.com/mertskaplan/followers" title="1.810 Followers">
                                    <span class="twPc-StatLabel twPc-block">Followers</span>
                                    <span class="twPc-StatValue">1.810</span>
                                </a>
                            </li>
                        </ul>
                    </div>
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
