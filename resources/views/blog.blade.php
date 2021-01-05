@extends('layouts.Landinglayout')

@section('content')
    <div class="container">
        <div class="row filtr-container">
            @foreach($posts as $post)
                <div class="col-md-6 col-lg-4 filtr-item" data-category="2,3">
                    <a href="/post/{{ $post->slug }}" style="text-decoration: none;">
                        <div class="card border-dark">
                            <div class="card-header bg-dark text-light">
                                <h5 class="m-0">{{ $post->title }}</h5>
                            </div><img class="img-fluid card-img w-100 d-block rounded-0" src="{{ Voyager::image( $post->image ) }}">
                            <div class="card-body">
                                <p class="card-text">{{ $post->meta_description }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <br><br>
    </div>
@endsection
