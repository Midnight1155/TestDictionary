@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl-12 offset-xl-0">
            <form action="" method="">
                <ol class="breadcrumb bg-light border rounded border-info">
                    <div class="search-box col-xl-6 offset-xl-0">
                        <!-- Search form -->
                        <input type="text" name="search" placeholder="Search any word in Kadazan" class="form-control" v-model="searchmodel"
                               v-on:Keyup="autoComplete"/>
                        <div class="panel-footer " style="position: absolute; z-index: 1000; background:#fff; border: 1px solid #ccc; width: 500px;">
                            <div class="panel-body" v-if="results.length">
                                <h6 v-for="result in results">
                                    <a :href="'{{route('home')}}/' + result.Kadazan" style="text-decoration: none;">&nbsp;&nbsp;<i class="fas fa-search"></i>
                                        <b>@{{ result.Kadazan }}</b>
                                    </a>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col text-left">
                        <a href="" class="btn btn-outline-dark my-2 my-sm-0" role="button" aria-pressed="true"><i class="fas fa-search"></i>&nbsp; Search</a>
                    </div>
                    <div class="col">
                        <a href="{{ route('searchfromdem.index') }}" class="btn btn-primary my-2 my-sm-0" role="button" aria-pressed="true"><i class="fas fa-search"></i>&nbsp; Search from Dusun/English/Malay Word</a>
                    </div>
                </ol>
            </form>
        </div>
    </div><br>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-dark text-light">
                    <h5 class="m-0">Results</h5>
                </div>
                <div class="card-body border rounded-0 border-dark">
                    <div class="row">
                        <div class="col">
                            <h2><b>{{ $dic_data->Kadazan }}</b></h2>
                        </div>
                    </div>
                    <hr class="hr1">
                    <div class="row">
                        <div class="col">
                            <h5>Dusun: </h5>
                            <h3>{{ $dic_data->Dusun }}</h3>
                        </div>
                    </div>
                    <hr class="hr1">
                    <div class="row">
                        <div class="col">
                            <h5>Malay: </h5>
                            <h3>{{ $dic_data->Malay }}</h3>
                        </div>
                    </div>
                    <hr class="hr1">
                    <div class="row">
                        <div class="col">
                            <h5>English: </h5>
                            <h3>{{ $dic_data->English }}</h3>
                        </div>
                    </div>
                    <hr class="hr1">
                    <div class="row">
                        <div class="col">
                            <h5>Example: </h5>
                            <h4>{{ $dic_data->kad_example }}</h4>
                            <h4>{{ $dic_data->mal_example }}</h4>
                            <h4>{{ $dic_data->eng_example }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-5">
            <div class="card">
                <div class="card-body bg-white border rounded-0">
                    <img src="{{ asset('storage/'.$dic_data->Image) }}" class="img-fluid" alt="No image Available"><br><br>
                    <audio controls>
                        <source src="{{ asset('storage/dictionary-data/'.$dic_data->Kadazan.'.mp3') }}" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
            </div>
        </div>
    </div><br>
    <div class="row">
        <div class="col">
        </div>
    </div>
    <div class="row">
        <div class="col"></div>
    </div>
</div>
@endsection
