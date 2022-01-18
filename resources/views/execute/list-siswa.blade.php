@extends('navigation.adminnav')

@section('content')
{{-- {{ dd($pengguna) }} --}}
    <title>Admin | Data Peserta</title>
</head>

<body
    
    <header>
        <h3>Data Calon Peserta Pesantren Al-Azhar</h3>
    </header>

    @if(session('success'))
        <div class="alert alert-success" role="alert">
        {{session('success')}}
        </div>
    @endif
    <nav>
        <a href="/daftar" target="blank">[+] Tambah Baru</a>
    </nav>

    <br>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Alamat</th>
            <th scope="col">No HP</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">tanggal Lahir</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Agama</th>
            <th scope="col">Sekolah Asal</th>
            <th scope="col">Nama Ayah</th>
            <th scope="col">No HP Ayah</th>
            <th scope="col">Pekerjaan Ayah</th>
            <th scope="col">Alamat Ayah</th>
            <th scope="col">Nama Ibu</th>
            <th scope="col">No HP Ibu</th>
            <th scope="col">Pekerjaan Ibu</th>
            <th scope="col">Alamat Ibu</th>
            <th scope="col">Status Pendaftaran</th>
            <th scope="col">Status Pembayaran</th>
            <th scope="col">Status Pembayaran Transfer</th>
            <th scope="col">Tindakan</th>
          </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
                foreach ($siswa as $value) :
            @endphp
          <tr>
            <th scope="row">{{ $no }}</th>
            @php
                    $no++;
                @endphp
            <td>{{ $value->nama }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->password }}</td>
            <td>{{ $value->alamat }}</td>
            <td>{{ $value->no_hp }}</td>
            <td>{{ $value->tempat_lahir }}</td>
            <td>{{ $value->tanggal_lahir }}</td>
            <td>{{ $value->jenis_kelamin }}</td>
            <td>{{ $value->agama }}</td>
            <td>{{ $value->sekolah_asal }}</td>
            <td>{{ $value->nama_ayah }}</td>
            <td>{{ $value->no_hp_ayah }}</td>
            <td>{{ $value->pekerjaan_ayah }}</td>
            <td>{{ $value->alamat_ayah }}</td>
            <td>{{ $value->nama_ibu }}</td>
            <td>{{ $value->no_hp_ibu }}</td>
            <td>{{ $value->pekerjaan_ibu }}</td>
            <td>{{ $value->alamat_ibu }}</td>
            <td>{{ $value->status_pendaftaran }}</td>
            <td>{{ $value->status_pembayaran }}</td>
            <td>{{ $value->status_pembayaran_transfer }}</td>
            <td><a href="/siswa/{{ $value->id }}/edit">Edit</a>
                <a href="/siswa/{{ $value->id }}/delete" onclick="return confirm('Yakin Mau dihapus?')">Hapus</a></td>
          </tr>
        
            @php
                endforeach;
            @endphp
        </tbody>
    </table>

    </tbody>
    </table>

    <p>Total: {{ count($siswa) }}</p>

    @endsection