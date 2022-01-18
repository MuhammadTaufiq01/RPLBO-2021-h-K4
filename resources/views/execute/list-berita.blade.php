@extends('navigation.adminnav')

@section('content')

<header>
    <h3>Data Calon Peserta Pesantren Al-Azhar</h3>
</header>

@if(session('success'))
    <div class="alert alert-success" role="alert">
    {{session('success')}}
    </div>
@endif
<nav>
    <a href="/tambah" target="blank">[+] Tambah Berita</a>
</nav>

<br>
<table class="table"  style="overflow:scroll">>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Judul</th>
        <th scope="col">Tanggal Berita</th>
        <th scope="col">Tindakan</th>
      </tr>
    </thead>
    <tbody>
        @php
            $no = 1;
            foreach ($berita as $value) :
        @endphp
      <tr>
        <th scope="row">{{ $no }}</th>
        @php
                $no++;
            @endphp
        <td>{{ $value->judul }}</td>
        <td>{{ $value->tanggal_berita }}</td>
        <td><a href="/berita/{{ $value->id }}/detail">Detail</a>
            <a href="/berita/{{ $value->id }}/hapus" onclick="return confirm('Yakin Mau dihapus?')">Hapus</a></td>
      </tr>
    
        @php
            endforeach;
        @endphp
    </tbody>
</table>
@endsection