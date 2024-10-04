@extends('mail.mail')

@section('content')
<div class="container pt-5">
    <div class="row">
        <div class="col-12">
            <p>
                Dear Bu Melda,<br><br>
                Berikut data calon karyawan di bidang <b>{{$job}}</b> di posisi <b>{{$position}}</b>. CV dan foto pribadi terlampir dalam email ini.
            </p>
        </div>
        <div class="col-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2>{{$name}}</h2>
            <h3>{{$job}}, {{$position}}</h3>

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
            </p>
        </div>
    </div>
</div>
@endsection