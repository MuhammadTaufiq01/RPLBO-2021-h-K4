@extends('navigation.adminnav')

@section('content')

<header>
    <h3>Tambah Berita</h3>
</header>

@if(session('success'))
    <div class="alert alert-success" role="alert">
    {{session('success')}}
    </div>
@endif

<form action="/tambah-berita" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <fieldset>
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul">
        </div>
        <div class="form-group">
            <label for="tanggal_berita">Tanggal Berita</label>
            <input type="date" class="form-control" id="tanggal_berita" name="tanggal_berita">
        </div>
        <div class="form-group">
            <label for="isi">Isi</label>
            <textarea class="form-control" id="isi" name="isi" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Gambar</label>
            <input type="file" class="form-control-file" @error('image') is-invalid @enderror id="image" name="image">
            @error('image') 
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    <button type="button" onclick="window.location='{{ url('/list-berita') }}'">Kembali</button>
    </fieldset>

</form>
<br>
@endsection