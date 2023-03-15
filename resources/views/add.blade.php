<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Add Book</title>
    <script>
      function confirmSubmit() {
        if(confirm("Apakah Anda yakin ingin menambahkan data ini?")) {
          return true;
        } else {
          return false;
        }
      }
    </script>
</head>
<body>
    <div class="container">
        <div class="">
            <div class="">
                <div class="card mt-4">
                    <div class="card-header d-flex justify-content-between">
                      <a href="/home " class="">{{ __('Add Book') }} </a>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/add" enctype="multipart/form-data">
                          {{csrf_field()}}
                            <div class="form-group">
                              <label>Judul</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" required name="judul">
                            </div>
                            <div class="form-group">
                              <label>Pengarang</label>
                              <input type="text" class="form-control" id="exampleInputPassword1" required name="pengarang">
                            </div>
                            <div class="form-group">
                              <label>Penerbit</label>
                              <input type="text" class="form-control" id="exampleInputPassword1" required name="penerbit">
                            </div>
                            <div class="form-group">
                              <label>Category</label>
                              <input type="text" class="form-control" id="exampleInputPassword1" required name="category">
                            </div>
                            <div class="form-group">
                              <label>Deskripsi</label>
                              <input type="text" class="form-control" id="exampleInputPassword1" required name="deskripsi">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlFile1">Gambar Cover</label>
                              <input type="file" class="form-control-file" required name="gambar">
                            </div>
                            <button type="submit" class="btn btn-primary" onclick="return confirmSubmit()">Submit</button>
                          </form>              
                    </div>
                </div>
            </div>
        </div>
</body>
</html>