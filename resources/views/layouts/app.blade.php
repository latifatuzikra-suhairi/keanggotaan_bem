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
               


           </div>
       </div>
   </nav>
    <br><br><br>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
