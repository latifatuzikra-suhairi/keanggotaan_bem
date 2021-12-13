<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


    {{-- logo fti --}}
    <link rel="shortcut icon" href="{{ asset('img/logoBEM.png') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>BEM KM FTI</title>
  </head>
  <body>

   <!--============================================================================ BG ==============================================================-->
   <img src="{{ asset('img/header-bg.svg') }}" class="position-absolute top-0 end-0 d-none d-lg-block" style="transform: translateY(-80px); transform: translateX(50px);">
   <img src="{{ asset('img/header-vector(1).svg') }}" width="40%" class="position-absolute img-header top-0 end-0 d-none d-lg-block display-header" style="margin-top:70px">
   {{-- <img src="{{ asset('img/header-vector(1).svg') }}" width="50%" class="display-header"> --}}

   <!--============================================================================ NAVBAR ==========================================================-->
   <nav class="navbar navbar-expand-lg navbar-light mt-3 fixed-top" id="navbar">
       <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/logoBEM.png') }}" height="60px">
        </a>
        <span class="me-2">BEM KM FTI</span>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
               aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
               {{-- <ul class="nav nav-pills navbar-position">
                   <li class="nav-item me-2">
                       <a class="nav-link link-navbar" href="#">Home</a>
                   </li>
                   <li class="nav-item me-2">
                       <a class="nav-link link-navbar" href="#">About</a>
                   </li>
                   <li class="nav-item me-2">
                       <a class="nav-link link-navbar" href="#">How it work</a>
                   </li>
                   <li class="nav-item me-2">
                       <a class="nav-link link-navbar" href="#">Clients</a>
                   </li>
                   <li class="nav-item me-2">
                       <a class="nav-link link-navbar" href="#">Portfolio</a>
                   </li>
               </ul> --}}

               <ul class="nav nav-pills">
                   <li class="nav-item me-2">
                       <a href="#" class="nav-link btn-custom rounded shadow" id="btn-login">Sign In</a>
                   </li>
               </ul>


           </div>
       </div>
   </nav>

   <!--============================================================================1. Heading ==========================================================-->
   <div class="container position-relative">

    <div class="display-space">
        <br><br>
    </div>

    <div class="row my-5">

        <div class="col-lg-6">
            <div class="row">
                <h1 class="bold-1 mt-5 mb-3 h2"><b>Badan Eksekutif Mahasiswa <br> Fakultas Teknologi Informasi UNAND</b></h1>
                <p class="max-width-4x bold-0 text-black-90">
                    BEM atau Badan Eksekutif Mahasiswa KM FTI UNAND merupakan wadah organisasi bagi mahasiswa keluarga Fakultas Teknologi Informasi
                    untuk berbagi masalah 
                </p>
                <p class="mt-2 text-muted">Jadilah bagian dari kami!</p>
                <div class="d-flex"style="margin-top:-10px">
                    <a href="{{ route('daftar') }}" class="btn btn-blue px-4 py-1 rounded shadow">Daftar</a>
                </div>

            </div>
        </div>

    </div>

</div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>