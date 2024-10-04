@extends('mail.mail')

@section('content')
<div class="container pt-5">
    <div class="row">
        <div class="col-12">
            <p>
                Dear Bu Customer Service,<br><br>
                Berikut data calon investor <b>{{$type}}</b> atas nama <b>{{$name}}</b>. Berikut data nomor HP/E-mail yang bisa d hubungi
            </p>
        </div>
        <div class="col-12">
            <hr>
        </div>
        <div class="col-12">
            <p>
                <div class="row">
                    <div class="col-1">
                        <i class="fa fa-phone"></i> No. HP:
                    </div>
                    <div class="col">
                        {{$phone}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <i class="fa fa-at"></i> Email:
                    </div>
                    <div class="col">
                        {{$email}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-1">
                        <i class="fa fa-info-circle"></i> Perihal:
                    </div>
                    <div class="col">
                        {{$about}}
                    </div>
                </div>
            </p>
        </div>
    </div>
    
</div>
@endsection