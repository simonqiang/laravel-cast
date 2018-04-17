@extends('layout.master')
@section('content')
    <div class="col-sm-8 blog-main">
        @foreach($posts as $post)
            @include('posts.post')
        @endforeach

        <nav class="blog-pagination">
            <a href="#" class="btn btn-outline-primary">Older</a>
            <a href="#" class="btn btn-outline-secondary disabled">Newer</a>
        </nav>
    </div>
@endsection
