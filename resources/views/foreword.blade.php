@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 align="center"><b><i>Foreword</i></b></h3><hr class="hr2">
            </div>
        </div>
        <div class="row">
            <div class="col">
                @foreach($foreword as $foreword)
                <p>
                    {{ $foreword->foreword_p1 }}<br><br>
                    {{ $foreword->foreword_p2 }}<br><br>
                    {{ $foreword->foreword_p3 }}<br><br>
                    {{ $foreword->foreword_p4 }}<br><br>
                    {{ $foreword->foreword_p5 }}<br><br>
                    {{ $foreword->foreword_p6 }}<br><br>
                    {{ $foreword->foreword_p7 }}<br>
                </p>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-xl-7 offset-xl-3">
                <p>
                    <i>Atagak o boros, atagak o koubasanan,</i><br>
                    <i>Atagak o koubasanan, atagak o kointutunan;</i><br>
                    <i>Atagak o boros, atagak o pirotian,</i><br>
                    <i>Atagak o pirotian, atagak o piunungan, pisokodungan om pibabasan;</i><br>
                    <i>Atagak o pibabasan, atagak o piobpinaian,</i><br>
                    <i>Atagak o piobpinaian, kopitongkiad o rikoton do rusodon.</i><br><br>
                    Lose your language and you’ll lose your culture,<br>
                    Lose your culture and you’ll lose your identity;<br>
                    Lose your language and you’ll lose mutual understanding,<br>
                    Lose your mutual understanding and you’ll lose harmony, mutual support and peace;<br>
                    Lose your peace and you’ll lose your brotherhood,<br>
                    Lose your brotherhood and you’ll lose your mutual destiny.<br>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p>The Kadazan Dusun language must live within the souls of the Kadazan Dusun people themselves through speaking, writing and reading the language.</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p align="right">
                    Huguan Siou Y.A.B. Datuk Joseph Pairin Kitingan<br>
                    <i>President</i><br>
                    <i>Kadazan Dusun Cultural Association, Sabah</i><br>
                    <i>Kota Kinabalu</i><br>
                    <i>February 1994</i>
                </p>
            </div>
        </div>
    </div>

@endsection
