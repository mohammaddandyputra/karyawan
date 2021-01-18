<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">My CRUD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/">Tambah Karyawan</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/karyawan">Data Karyawan</a>
            </li>
          </ul>
        </div>
      </nav>
    <div class="container mt-5">
        <h1>Karyawan List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>NIK</th>
                    <th>Nama Karyawan</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Gender</th>
                    <th>Keahlian</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($karyawans as $karyawan)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$karyawan->nik}}</td>
                  <td>{{$karyawan->nama_karyawan}}</td>
                  <td>{{$karyawan->alamat}}</td>
                  <td>{{$karyawan->email}}</td>
                  <td>{{$karyawan->tempat_lahir}}</td>
                  <td>{{$karyawan->tanggal_lahir}}</td>
                  <td>{{$karyawan->gender}}</td>
                  <td>{{$karyawan->keahlian}}</td>
                  <td>
                    <a href="/edit/{{$karyawan->nik}}" class="btn btn-success">Edit</a>
                    <form action="/delete/{{$karyawan->nik}}" method="POST">
                    @csrf
                    @method ('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>  
</body>
</html>