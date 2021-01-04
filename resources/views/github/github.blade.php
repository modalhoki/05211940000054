<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.js"></script>
    <style>
    .pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}
    </style>
</head>

<body>

    <div class="bg-dark">
        <div class="container sticky-top">
            <nav class="navbar navbar-expand-sm navbar-dark">
                <ul class="navbar-nav">
                    <li class="nav-item {{ Request::is('github') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('github') }}">Home</a>
                    </li>
                    <li class="nav-item {{ Request::is('github/tambah') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('github/tambah')}}">Tambah</a>
                    </li>
                    <li class="nav-item {{ Request::is('github/pegawai') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('github/pegawai')}}">Pegawai</a>
                    </li>
                    <li class="nav-item {{ Request::is('github/pegawai/tambah') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('github/pegawai/tambah')}}">Tambah Pegawai</a>
                    </li>
                    <li class="nav-item {{ Request::is('github/join') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('github/join')}}">Join</a>
                    </li>
                </ul>
                    <form class="form-inline" action="{{ url('github/cari') }}" method="GET">
                        <input  name="cari" class="form-control mr-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
            </nav>
        </div>
    </div>

    <div class="container">
        @yield('konten')
    </div>

    <div class="container p-3">
        <div class="row">
            <div class="navbar-dark">
                <p>© modalhoki</p>
            </div>
        </div>
    </div>

</body>

</html>