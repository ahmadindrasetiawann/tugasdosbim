<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">1461900250_Ahmad_Indra_Setiawan | </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home">Dasboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="input">Input Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="laporan">Laporan</a>
        </li>
        <li>
        <a href="{{ route('logout') }}" class="btn btn-danger" >Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3>Laporan</h3>
                </div>
                <div class="card-body">
                    <h5>Selamat datang di halaman Laporan, <strong>{{ Auth::user()->name }}</strong></h5>
                    <a class="tambah" href="{{url( '/laporan/pdf')}}"> Print </a>
                    <table class="table">
                    <thead class="thead-dark">
                    <tr>
                      <th>id</th>
                      <th>Nama</th>
                      <th>NBI</th>
                      <th>Email</th>
                      <th>Jurusan</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; ?>
                    @foreach ($mahasiswa as $mhs)
                    <tr>
                        <td>{{$mhs->id}}</td>
                        <td>{{$mhs->Nama}}</td>
                        <td>{{$mhs->NBI}}</td>
                        <td>{{$mhs->Email}}</td>
                        <td>{{$mhs->Jurusan}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>