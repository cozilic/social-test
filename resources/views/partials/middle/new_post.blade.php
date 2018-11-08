<!--- \\\\\\\Post-->
<div class="card gedf-card shadow">
    <form action="{{route('store.post')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Make
                    a publication</a>
            </li>
{{--
            <li class="nav-item">
                <a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Images</a>
            </li>
--}}
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                <div class="form-group">
                    <label class="sr-only" for="message">post</label>
                    <input type="hidden" name="mentions" id="mentions">
                    <input type="hidden" name="user_id" id="mentions" value="{{Auth::user()->id}}">

                    <textarea style="display:none;" type="hidden" id="body" name="body"></textarea>
                    <div class="has-mentions form-control" id="textarea" contenteditable name="body" for="#body"></div>

                </div>

            </div>
            <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
                <div class="form-group">
                    <div class="custom-file">
{{--
    <input type="file" name="image" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Upload image</label>
    <div class="col-md-12 uploadfrm">
        <p><span class="btn btn-primary btn-file">
            Upload image <input name="image" type="file"  onchange="readURL(this);">
        </span></p>
    </div>
    <div class="preview">
        <img id="blah" width="300" height="300" src="" alt="" class="img-thumbnail border-0">
    </div>
    --}}

                    </div>
                </div>
                <div class="py-4"></div>
            </div>
        </div>
        <div class="btn-toolbar justify-content-between">
            <div class="btn-group">
                <button type="submit" class="btn btn-primary">share</button>
            </div>
            <div class="btn-group">
                <div class="btn btn-primary btn-file">
                    Upload image <input name="image" type="file" onchange="readURL(this);">
                </div>
            </div>


            <div class="btn-group">
                    <select class="custom-select my-1 mr-sm-2" name="visibility" id="inlineFormCustomSelectPref">
                            <option value="public" selected>Public</option>
                            <option value="friends">Friends</option>
                            <option value="private">Private</option>
                          </select>
            </div>
        </div>
    </div>
</form>
<div class="preview">
        <center><img id="blah" width="300" height="300" src="" alt="" class="img-thumbnail border-0"></center>
    </div>

</div>

<!-- Post /////-->
