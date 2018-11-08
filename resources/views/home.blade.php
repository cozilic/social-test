@extends('layouts.app')

@section('content')

<div class="container-fluid gedf-wrapper">
    <div class="row">
@include('partials.left.personal')
        <div class="col-md-6 gedf-main">

            <!-- Create new post -->
            @include('partials.middle.new_post')
            <!-- Create new post end -->

            <!-- Display the posts -->
            @include('partials.middle.posts')
            <!-- Display the posts end -->

            <!-- Display widgets -->
            @include('partials.right.widget')
            <!-- Display widgets end -->

        </div>
    </div>
</div>

@endsection
