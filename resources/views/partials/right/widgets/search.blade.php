        <div class="card gedf-card shadow">
                <div class="card-body">
                    <h5 class="card-title">Search Tags</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Find the tag you are looking for</h6>
                    <p class="card-text">
                        <form action="{{route('search.tag','tag')}}" method="GET">
                                <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon1">#</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Tag" aria-label="tag" aria-describedby="basic-addon1" name="tag" value="{{Request()->query('tag')}}">
                                      </div>
                                                            </form>
                    </p>
                        {{--  <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>  --}}
                </div>
            </div>
