
@section('search')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="jumbotron" style="background-image: url({{ url('/assets/img/front.jpg') }});">
                <h1 class="text-white">Kadazandusun</h1>
                <p class="text-white">Pls insert anything required.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 offset-xl-0">
            <form action="" method="post">
                <ol class="breadcrumb bg-light border rounded border-info">
                    <div class="search-box col-xl-10 offset-xl-0">
                        <!-- Search form -->
                        <input type="text" name="search" placeholder="Search any word in Kadazan" class="form-control" v-model="searchmodel"
                               v-on:Keyup="autoComplete"/>
                    </div>
                    <div class="panel-footer" v-if="results.length" style="position: absolute; z-index: 1000; background:#fff;">
                        <p v-for="result in results">
                            <a :href="'{{route('dictionary.index')}}/' + result.Kadazan">
                                <b>@{{ result.Kadazan }}</b>
                            </a>
                        </p>
                    </div>
                    <div class="col text-left">
                        <button class="btn btn-outline-dark my-2 my-sm-0" name="wordsearch" type="submit"><i class="fas fa-search"></i>  Search</button>
                    </div>
                </ol>
            </form>
        </div>
    </div><br>
</div>
@endsection
