@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 align="center"><b><i>Preface</i></b></h3><hr class="hr2">
            </div>
        </div>
        <div class="row">
            <div class="col">
                @foreach($preface as $preface)
                <p>
                    {{ $preface->preface_p1 }}<br><br>
                    {{ $preface->preface_p2 }}<br><br>
                    {{ $preface->preface_p3 }}<br><br>
                    {{ $preface->preface_p4 }}<br><br>
                    {{ $preface->preface_p5 }}<br><br>
                    {{ $preface->preface_p6 }}<br>
                </p>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p align="right">
                    Y.B. Datuk Benard G. Dompok<br>
                    <i>Deputy President,</i><br>
                    <i>Kadazan Dusun Cultural Association, Sabah</i><br>
                    <i>February 1994 </i>
                </p>
            </div>
        </div>
    </div>
@endsection
