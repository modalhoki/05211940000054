<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.js"></script>
</head>

<body>

    <div class="bg-dark">
        <div class="container sticky-top">
            <nav class="navbar navbar-expand-sm navbar-dark">
                <ul class="navbar-nav">
                    <li class="nav-item {{ Request::is('tabel') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('tabel') }}">Home</a>
                    </li>
                    <li class="nav-item {{ Request::is('tabel/tambah') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('tabel/tambah')}}">Tambah</a>
                    </li>
                </ul>
                    <form class="form-inline" action="{{ url('tabel/cari') }}" method="GET">
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