@extends('main.main')

@section('nav')


    <title> | SISTEM INFORMASI PESANTREN AL-AZHAR</title>
</head>
<body>
    <nav>
        <div class="logo">
            <h4>Pesantren Al-Azhar</h4>
        </div>
        <ul>
                   
            <li><a href="/login">Login</a></li>
        
            <li><a href="/home">Home</a></li>
            <li><a href="/profil">Profil</a></li>
            {{-- <li><a href="/berita">Berita</a></li> --}}
            <li><a href="/ppdb">PPDB 2022</a></li>
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
