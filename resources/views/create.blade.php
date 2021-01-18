<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First CRUD</title>
    <link rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">My CRUD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/">Tambah Karyawan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/karyawans">Data Karyawan</a>
            </li>
          </ul>
        </div>
      </nav>
    <div class="container mt-5" style="width: 33%;">
        <form class="mb-4" action="/store" method="POST">
        @csrf
            <h1 class="text-center mb-4">Tambah Karyawan</h1>
            <div class="form-group">
                <label for="">NIK</label>
                <input type="text" class="form-control" name="nik">
            </div>
            <div class="form-group">
                <label for="">Nama Karyawan</label>
                <input type="text" class="form-control" name="nama_karyawan">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" class="form-control" name="alamat">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="">Tempat Lahir</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="">Tanggal Lahir</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="">Gender</label>
                <input type="radio" value="Laki-laki" name="gender">Laki - laki
                <input type="radio" value="Perempuan" name="gender">Perempuan
            </div>
            <div class="form-group">
                <label for="">Keahlian</label>
                <input type="checkbox" value="" name="email">
            </div>
            <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
<script src="{{asset('scripts/jquery-3.5.0.min.js')}}"></script>
<script src="{{asset('scripts/bootstrap.min.js')}}"></script>
</body>
</html>