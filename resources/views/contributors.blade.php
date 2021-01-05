@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Contributors</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">

            <br>
            <object data="{{ asset('img/Message.pdf') }}" type=”pdf/html” width=”350″ height=”250″>

                <p><b>Example</b>:If you are unable view pdf file please click on below and download the file: <a href="{{ asset('img/Message.pdf') }}">Download PDF</a>.</p>

            </object>
        </div>
    </div>
</div>
@endsection
