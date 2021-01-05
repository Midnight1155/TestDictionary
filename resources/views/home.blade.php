@extends('layouts.app')
@section('content')
    <div class="container" xmlns:v-on="http://www.w3.org/1999/xhtml">
        <div class="row">
            <div class="col">
                <div class="jumbotron" style="background-image: url({{ url('/assets/img/front.jpg') }});">
                    <h1 class="text-white">Kadazan / Dusun / Malay / English</h1>
                    <p class="text-white">Dictionary</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 offset-xl-0">
                <form action="" method="post">
                    <ol class="breadcrumb bg-light border rounded border-info">
                        <div class="search-box col-xl-6 offset-xl-0">
                            <!-- Search form -->
                            <input type="text" name="search" placeholder="Search any word in Kadazan" class="form-control" v-model="searchmodel"
                                   v-on:Keyup="autoComplete"/>
                                    <div class="panel-footer " style="position: absolute; z-index: 1000; background:#fff; border: 1px solid #ccc; width: 94%;">
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
            <div class="col-xl-7">
                <div class="card">
                    <div class="card-header bg-dark text-light">
                        <h5 class="m-0">Recommend Searches</h5>
                    </div>
                    <div class="card-body border rounded-0 border-dark">
                        @foreach($dic_datas as $dic_data)
                            <div class="row">
                                <div class="col text-center align-self-center">
                                    <a href="{{ route('dictionary.show', $dic_data->Kadazan) }}" style="text-decoration:none"><h3 class="text-center">{{ $dic_data->Kadazan }}</h3></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header bg-dark text-light text-center">
                                <h5 class="m-0">WORD OF THE DAY</h5>
                            </div>
                            <div class="card-body border border-primary">
                                @foreach($wordofday as $wod)
                                    <a href="{{ route('dictionary.show', $wod->Kadazan) }}" style="text-decoration:none"><h3 class="text-center card-subtitle mb-2">{{ $wod->Kadazan }}</h3></a>
                                @endforeach
                                <h5>English: </h5>
                                @foreach($wordofdayresult as $result)
                                        <h4 class="card-subtitle mb-2">{{ $result->English }}</h4>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header bg-dark text-danger">
                                <h5 class="m-0">Attention to All</h5>
                            </div>
                            <div class="card-body border border-dark">
                                <h5>If you search for word contains: <b>ḇ</b> and <b>ḏ</b></h5>
                                <h5>Kindly replace with <b>bb</b> and <b>dd</b></h5>
                                <h5>Thanks.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div><br>

        <div class="row">
            <div class="col"></div>
            <div class="col-xl-5"></div>
        </div>
    </div>
@endsection
