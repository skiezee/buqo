<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Detail</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex justify-content-center" href="{{ url('/') }}">
                Detail Buku
            </a>
        </div>
    </nav>
    <div class="card-body">
        <div class="body-card d-flex flex-row justify-content-around mt-4">
            <div class="card rounded " style="width: 16rem;"  >
              <div class="d-flex justify-content-center mt-4">                        
                <img src={{ asset('cover/'. $book-> gambar)}} alt="" width="200" class="rounded">
              </div>
              <div class="card-body m-2">
                <h4 id="font-family">{{$book-> judul}}</h4>
                <p id="font-family">pengarang: <b>{{$book-> pengarang}}</b></p>
                <p id="font-family">penerbit: <b>{{$book-> penerbit}}</b></p>
                <p id="font-family">category: <b>{{$book-> category}}</b></p>
                <p id="font-family">Deskripsi: {{$book-> deskripsi}}</p>
              </div>
            </div>             
    </div> 
</body>
</html>