@extends('Layout.layout')

@section('content')
    <div class="row">
        <div class="col">
            <div class="jumbotron" style="background-image: url({{ url('/assets/img/front.jpg') }});">
                <h1 class="text-white">Kadazandusun</h1>
                <p class="text-white">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 offset-xl-0">
            <form action="" method="post">
                <ol class="breadcrumb bg-light border rounded border-info">
                    <div class="search-box col-xl-10 offset-xl-0">
                        <!-- Search form -->
                        <input type="text" name="search" id="search" placeholder="Search any word in Kadazandusun" aria-label="Search" class="search form-control">
                    </div>
                    <div class="col text-left">
                        <button class="btn btn-outline-dark my-2 my-sm-0" name="wordsearch" type="submit"><i class="fas fa-search"></i>  Search</button>
                    </div>
                </ol>
            </form>
        </div>
    </div><br>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body border rounded-0 border-warning">
                    <h4 class="card-title">Popular Searches</h4>
                    <div class="row">
                        <div class="col text-center align-self-center">
                            <a href=""><h2 class="text-center">Buntung</h2></a>
                        </div>
                        <div class="col text-center align-self-center">
                            <a href=""><h2>Kinokumisan</h2></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col align-self-center">
                            <a href=""><h2 class="text-center">ngiot</h2></a>
                        </div>
                        <div class="col align-self-center">
                            <a href=""><h2 class="text-center">savang</h2></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col align-self-center">
                            <a href=""><h2 class="text-center">sosok</h2></a>
                        </div>
                        <div class="col align-self-center">
                            <a href=""><h2 class="text-center">sikalap</h2></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-5">
            <div class="card">
                <div class="card-body bg-info border rounded-0 border-primary">
                    <h4 class="card-title">Word of the Day</h4>
                    <h3 class="text-muted card-subtitle mb-2">Hokos</h3>
                    <p class="card-text">Melayu: anak sungai</p>
                    <p class="card-text">English: brook, stream, rivulet.</p>
                    <a class="card-link" href="#">Link</a>
                </div>
            </div>
        </div>
    </div><br>
    <div class="row">
        <div class="col">
            <h4>Explore the Kadazandusun Dictionary</h4>
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-4">
            <div class="card border-dark border rounded-0">
                <div class="card-body text-info" style="background-color: rgb(220, 240, 247);">
                    <h4 class="card-title">Kadazandusun - English</h4>
                    <h6 class="text-muted card-subtitle mb-2">Subtitle</h6>
                    <p class="card-text">Description</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-dark border rounded-0">
                <div class="card-body text-info" style="background-color: rgb(220, 240, 247);">
                    <h4 class="card-title">Kadazandusun - Malay</h4>
                    <h6 class="text-muted card-subtitle mb-2">Subtitle</h6>
                    <p class="card-text">Description</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-dark border rounded-0">
                <div class="card-body text-info" style="background-color: rgb(220, 240, 247);">
                    <h4 class="card-title">Title</h4>
                    <h6 class="text-muted card-subtitle mb-2">Subtitle</h6>
                    <p class="card-text">Description</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col"></div>
        <div class="col-xl-5"></div>
    </div>
@endsection
