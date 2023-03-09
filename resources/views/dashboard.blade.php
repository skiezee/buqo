<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand font-bold" href="#" id="title-nav">Buqo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('login')}}" id="text-login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('register')}}" id="text-register">Register</a>
      </li>
    </ul>
  </div>
</nav>
  
  <div class="landing">
    <div class="flex flex-col mt-5">
      <h1 class="font-bold" id="title-landing">Buqo</h1>
      <h1 class="font-weight-normal lead" id="title-desc">Buqo merupakan sebuah website daftar buku yang berguna bagi kita melihat buku buku yang menarik untuk dibaca</h1>
    </div>
    <div class="img-landing">
      <img src="images/fix landing.png" alt="">
    </div>
  </div>

  <div class="bg-information">
    <div class="flex flex-col mt-4 mb-4">
      <h1 class="text-5xl text-white font-semibold">1.400 +</h1>
      <p class="mx-auto text-white text-lg mt-8 text-center">Daftar Buku</p>
    </div>
    <div class="flex flex-col mt-4 mb-4">
      <h1 class="text-5xl text-white font-semibold">800 +</h1>
      <p class="m-auto text-white text-lg mt-8 text-center">Pembaca</p>
    </div>
    <div class="flex flex-col mt-4 mb-4">
      <h1 class="text-5xl text-white font-semibold">200 +</h1>
      <p class="ml-2 text-white text-lg mt-8 text-center">Member</p>
    </div>
  </div>  

  {{-- menampilkan data --}}
  <div class="container-read">
    <div class="read-one">
      <img src="images/demon.jpg" alt="" width="200" class="mb-4">
      <h4>judul</h4>
      <h6>author</h4>
      <h6>tahun terbit</h6>
      <h6>penerbit</h6>
    </div>
    <div class="read-one">
      <img src="images/demon.jpg" alt="" width="200" class="mb-4">
      <h4>judul</h4>
      <h6>author</h4>
      <h6>tahun terbit</h6>
      <h6>penerbit</h6>
    </div>
    <div class="read-one">
      <img src="images/demon.jpg" alt="" width="200" class="mb-4">
      <h4>judul</h4>
      <h6>author</h4>
      <h6>tahun terbit</h6>
      <h6>penerbit</h6>
    </div>
    <div class="read-one">
      <img src="images/demon.jpg" alt="" width="200" class="mb-4">
      <h4>judul</h4>
      <h6>author</h4>
      <h6>tahun terbit</h6>
      <h6>penerbit</h6>
    </div>
    <div class="read-one">
      <img src="images/demon.jpg" alt="" width="200" class="mb-4">
      <h4>judul</h4>
      <h6>author</h4>
      <h6>tahun terbit</h6>
      <h6>penerbit</h6>
    </div>
  </div>

  <div class="container-read">
    <div class="read-one">
      <img src="images/demon.jpg" alt="" width="200" class="mb-4">
      <h4>judul</h4>
      <h6>author</h4>
      <h6>tahun terbit</h6>
      <h6>penerbit</h6>
    </div>
    <div class="read-one">
      <img src="images/demon.jpg" alt="" width="200" class="mb-4">
      <h4>judul</h4>
      <h6>author</h4>
      <h6>tahun terbit</h6>
      <h6>penerbit</h6>
    </div>
    <div class="read-one">
      <img src="images/demon.jpg" alt="" width="200" class="mb-4">
      <h4>judul</h4>
      <h6>author</h4>
      <h6>tahun terbit</h6>
      <h6>penerbit</h6>
    </div>
    <div class="read-one">
      <img src="images/demon.jpg" alt="" width="200" class="mb-4">
      <h4>judul</h4>
      <h6>author</h4>
      <h6>tahun terbit</h6>
      <h6>penerbit</h6>
    </div>
    <div class="read-one">
      <img src="images/demon.jpg" alt="" width="200" class="mb-4">
      <h4>judul</h4>
      <h6>author</h4>
      <h6>tahun terbit</h6>
      <h6>penerbit</h6>
    </div>
  </div>
  <div class="container-read">
    <div class="read-one">
      <img src="images/demon.jpg" alt="" width="200" class="mb-4">
      <h4>judul</h4>
      <h6>author</h4>
      <h6>tahun terbit</h6>
      <h6>penerbit</h6>
    </div>
    <div class="read-one">
      <img src="images/demon.jpg" alt="" width="200" class="mb-4">
      <h4>judul</h4>
      <h6>author</h4>
      <h6>tahun terbit</h6>
      <h6>penerbit</h6>
    </div>
    <div class="read-one">
      <img src="images/demon.jpg" alt="" width="200" class="mb-4">
      <h4>judul</h4>
      <h6>author</h4>
      <h6>tahun terbit</h6>
      <h6>penerbit</h6>
    </div>
    <div class="read-one">
      <img src="images/demon.jpg" alt="" width="200" class="mb-4">
      <h4>judul</h4>
      <h6>author</h4>
      <h6>tahun terbit</h6>
      <h6>penerbit</h6>
    </div>
    <div class="read-one">
      <img src="images/demon.jpg" alt="" width="200" class="mb-4">
      <h4>judul</h4>
      <h6>author</h4>
      <h6>tahun terbit</h6>
      <h6>penerbit</h6>
    </div>
  </div>
  {{-- menampilkan data --}}
  
</body>
</html>