@extends('main.main')

@section('nav')


    <title>Admin | SISTEM INFORMASI PESANTREN AL-AZHAR</title>
</head>
<body>
    <nav>
        <div class="logo">
            <h4>Admin Al-Azhar</h4>
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
            <li><a href="/list-siswa">Kelola Data Peserta Didik</a></li>
            <li><a href="/kelola-profil">Kelola Profil</a></li>
            <li><a href="/list-berita">Kelola Berita</a></li>
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