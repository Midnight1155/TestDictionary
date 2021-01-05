@extends('layouts.Landinglayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1>{{ $post->title }}</h1>
            <img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
            <p>{!! $post->body !!}</p>
            <br><hr class="hr1"><br>
        </div><br><br>
        <div class="col-sm-3 offset-sm-2"><img class="img-fluid rounded-circle" src="{{ Voyager::image( $post->auther_avatar ) }}" data-holder-rendered="true" loading="lazy" style="width:60%"></div>
        <div class="col-sm-3 offset-sm-0">
            <h6 class="text-justify text-muted">WRITTEN BY</h6>
            <h4>{{ $post->auther_name }}</h4>
            <h6 class="text-muted">{{ $post->created_at }}</h6>
            <br>
        </div>
        <div class="col-sm-3">
            <div class="addthis_inline_share_toolbox"></div>
        </div>
    </div>
</div>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f3eb4abba004c2c"></script>
@endsection
