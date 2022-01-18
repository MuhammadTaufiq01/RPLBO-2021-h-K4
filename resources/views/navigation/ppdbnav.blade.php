@extends('main.main')

@section('nav')

    <title>PENERIMAAN PESERTA DIDIK BARU</title>
</head>
<body>
    <nav>
        <div class="logo">
            <h4>PPDB Pesantren Al-Azhar 2022</h4>
        </div>

        <ul>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Welcome Back {{ auth()->guard('pengguna')->user()->nama }}
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  {{-- <li><hr class="dropdown-divider"></li> --}}

                  {{-- Logout --}}
                  <form action="/logout" method="POST">
                    @csrf
                      <button type="submit" class="dropdown-item">Logout</button>
                  </form>
                </ul>
              </div>
            <li><a href="/informasi-pendaftaran">Informasi Pendaftaran</a></li>
            <li><a href="/berita">Upload Bukti Pendaftaran</a></li>
            <li><a href="/ujian">Ujian</a></li>
        </ul>

        <div class="menu-toggle">
            <input type="checkbox">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <div style="margin: 50px">
        @yield('content')
    </div>
    
@endsection