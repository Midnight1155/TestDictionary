@extends('layouts.app')

@section('content')
    <div class="container" xmlns="">
        <div class="row">
            <div class="col">
                <h2><b>Message from the Chairman of the KDCA Dictionary Reprinting Committee</b></h2>
            </div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <pre><i>
                    “Ogumu’ basa’on nung ara'at suang do buuk
                    Ogumu’ mambabasa’ tarata obungou o tutok..
                    Surala do tosonong, kapasayau
                  songkinoruhangan
                    Sinuratan do tosonong, kaparayou
                  songkotinoruan"
                                                © Diwato
                </i></pre>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3><b>Kotobian om Kopivosian ku doid diozu savi-avi’.</b></h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @foreach($message as $message)
                <p>{{ $message->message_p1 }}<br><br>
                    {{ $message->message_p2 }}<br><br>
                    {{ $message->message_p3 }}<br><br>
                    {{ $message->message_p4 }}<br><br>
                    {{ $message->message_p5 }}<br><br>
                    {{ $message->message_p6 }}<br><br>
                </p>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p>
                    <b>Datuk Seri Panglima Clarence Bongkos Malakun, J.P.</b><br>
                    KDCA Deputy President and Chairman of the KDCA Dictionary Reprinting Committee 2013
                </p>
            </div>
        </div>

    </div>
@endsection
