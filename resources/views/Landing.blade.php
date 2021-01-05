@extends('layouts.Landinglayout')
<style>
    .carousel-item {
        height: 500px;
    }
    .item img {
        position: absolute;
        object-fit:cover;
        top: 0;
        left: 0;
        min-height: 500px;
    }
</style>
@section('content')
<div class="container">
    <div class="row">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('/assets/img/k1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/assets/img/k2.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/assets/img/k3.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col">
            <h3>Posts</h3>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col">
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
            </div>
        </div>
    </div>
</div>
@endsection
