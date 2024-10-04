@extends('layouts.main')
@section('title','Daftar')
@section('content')
<nav class="navbar navbar-expand-md navbar-light bg-primary">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{asset('logo-white.png')}}" width="40" height="40" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item pl-2 pr-2">
                            <a href="/produk" class="nav-link text-white">Produk</a>
                        </li>
                        <li class="nav-item pl-2 pr-2 bg-white rounded-pill">
                            <a href="/karir" class="nav-link text-primary">Karir</a>
                        </li>
                        <li class="nav-item pl-2 pr-2">
                            <a href="/bisnis" class="nav-link text-white">Bisnis</a>
                        </li>
                        <li class="nav-item pl-2 pr-2">
                            <a href="/onlinetrading" class="nav-link text-white">Online Trading</a>
                        </li>
                        <li class="nav-item pl-2 pr-2">
                            <a href="/perusahaan" class="nav-link text-white">Perusahaan</a>
                        </li>
                        <!-- <li class="nav-item ml-5 dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ID
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">EN</a>
                                <a class="dropdown-item" href="#">中文</a>
                                <a class="dropdown-item" href="#">日本</a>
                                <a class="dropdown-item" href="#">FR</a>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>



<div class="container mb-5 mt-5">
    <div class="row">
        <div class="col-12">
            <h3>Daftar Kerja</h3>
            <hr>
        </div>
    </div>
    <form class="row" method="post" id="daftarkerjaan" enctype="multipart/form-data">
    @csrf
        <div class="col-12">
            <label for="name">Nama Lengkap</label>
            <input type="text" class="form-control" name="name" id="name">
            <span class="text-danger" id="name-error"></span>
        </div>
        <div class="col-12 mt-3">
            <label for="phone">No. Handphone</label>
            <small class="badge badge-warning small">Pastikan nomor handphone dapat dihubungi</small>
            <input type="text" class="form-control" name="phone" id="phone">
            <span class="text-danger" id="phone-error"></span>
        </div>
        <div class="col-12 mt-3">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="email" id="email">
            <span class="text-danger" id="email-error"></span>
        </div>
        <div class="col-12 mt-3">
            <label for="job">Pekerjaan yang diminati</label>
            <input type="text" disabled class="form-control" value="{{$job->name}}">
            <input type="hidden" value="{{$job->name}}" name="job" id="job">
            <span class="text-danger" id="job-error"></span>
        </div>
        <div class="col-12 mt-3">
            <label for="job">Posisi</label>
            <input type="text" disabled class="form-control disabled" value="{{$job->position}}" name="position" id="position">
            <input type="hidden" value="{{$job->position}}" name="position" id="position">
            <span class="text-danger" id="position-error"></span>
        </div>
        <div class="col-12 mt-3">
            <label for="cv">Upload CV</label>
            <div class="input-group mb-3">
                <div class="custom-file">
                    <input type="file" class="form-control" name="cv" id="cv" accept="application/pdf" >
                </div>
            </div>
            <span class="text-danger" id="cv-error"></span>
        </div>
        <div class="col-12 mt-3">
            <label for="photo">Pas Foto</label>
            <div class="input-group mb-3">
                <div class="custom-file">
                    <input type="file" class="form-control" name="photo" id="photo" accept="image/*">
                </div>
            </div>
            <span class="text-danger" id="photo-error"></span>
        </div>
        
        <div class="col-12 mt-3">

            <div class="row">
                {{-- <div class="col-md-4"></div> --}}
                <div class="form-group col-md-4">
                    <div class="captcha">
                        <span>{!! captcha_img() !!}</span>
                        <button type="button" class="btn btn-success"><i class="fa fa-sync-alt" id="refresh"></i></button>
                    </div>
                </div>
            </div>
            <div class="row">
                {{-- <div class="col-md-4"></div> --}}
                <div class="form-group col-md-4">
                    <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha"></div>
                </div>
                <span class="text-danger" id="captcha-error"></span>
            </div>

        </div>

        <div class="col-12 mt-3 text-right">
            <hr>
            <button type="submit" id="applyjob" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

<script type="text/javascript">
    $('#refresh').click(function(){
      $.ajax({
         type:'GET',
         url:'/refreshcaptcha',
         success:function(data){
            $(".captcha span").html(data.captcha);
            console.log('test')
         }
      });
    });
</script>
@endsection
