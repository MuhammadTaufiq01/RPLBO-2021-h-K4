<!DOCTYPE html>
<html>
<head>
    <title>Admin | Formulir Edit Siswa</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>

    <form action="/siswa/{{ $siswa->id }}/update" method="POST">
        {{ csrf_field() }}
        <fieldset>
            <label for="id">Id: </label>
            <input type="hidden" name="id" value="{{ $siswa->id }}" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="Nama Lengkap" value="{{ $siswa->nama }}" />
        </p>
        <p>
            <label for="password">Password: </label>
            <input type="password" name="password" placeholder="Password" value="{{ $siswa->password }}" />
        </p>
        <p>
            <label for="email">Email: </label>
            <input type="text" name="email" placeholder="Email" value="{{ $siswa->email }}" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat">{{ $siswa->alamat }}</textarea>
        </p>
        <p>
            <label for="no_hp">No HP: </label>
            <input type="tel" name="no_hp" placeholder="No HP" value="{{ $siswa->no_hp }}" />
        </p>
        <p>
            <label for="tempat_lahir">Tempat Lahir: </label>
            <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" value="{{ $siswa->tempat_lahir }}" />
        </p>
        <p>
            <label for="tanggal_lahir">Tanggal Lahir: </label>
            <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" value="{{ $siswa->tanggal_lahir }}" />
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" @if ($siswa->jenis_kelamin == 'laki-laki') selected @endif> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" @if ($siswa->jenis_kelamin == 'perempuan') selected @endif> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option @if ($siswa->agama == 'Islam') selected @endif>Islam</option>
                <option @if ($siswa->agama == 'Kristen') selected @endif>Kristen</option>
                <option @if ($siswa->agama == 'Hindu') selected @endif>Hindu</option>
                <option @if ($siswa->agama == 'Budha') selected @endif>Budha</option>
                <option @if ($siswa->agama == 'Atheis') selected @endif>Atheis</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="nama sekolah" value="{{ $siswa->sekolah_asal }}" />
        </p>
        <p>
            <label for="nama_ayah">Nama Ayah: </label>
            <input type="text" name="nama_ayah" placeholder="Nama Ayah" value="{{ $siswa->nama_ayah }}" />
        </p>
        <p>
            <label for="no_hp_ayah">No HP Ayah: </label>
            <input type="tel" name="no_hp_ayah" placeholder="No HP Ayah" value="{{ $siswa->no_hp_ayah }}" />
        </p>
        <p>
            <label for="pekerjaan_ayah">Pekerjaan Ayah: </label>
            <input type="text" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" value="{{ $siswa->pekerjaan_ayah }}" />
        </p>
        <p>
            <label for="alamat_ayah">Alamat Ayah: </label>
            <input type="text" name="alamat_ayah" placeholder="Alamat Ayah" value="{{ $siswa->alamat_ayah }}" />
        </p>
        <p>
            <label for="nama_ibu">Nama Ibu: </label>
            <input type="text" name="nama_ibu" placeholder="Nama Ibu" value="{{ $siswa->nama_ibu }}" />
        </p>
        <p>
            <label for="no_hp_ibu">No HP Ibu: </label>
            <input type="text" name="no_hp_ibu" placeholder="No HP Ibu" value="{{ $siswa->no_hp_ibu }}" />
        </p>
        <p>
            <label for="pekerjaan_ibu">Pekerjaan Ibu: </label>
            <input type="text" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" value="{{ $siswa->pekerjaan_ibu }}" />
        </p>
        <p>
            <label for="alamat_ibu">Alamat Ibu: </label>
            <input type="text" name="alamat_ibu" placeholder="Alamat Ibu" value="{{ $siswa->alamat_ibu }}" />
        </p>
        <p>
            <label for="status_pendaftaran">Status Pendaftaran: </label>
            <input type="text" name="status_pendaftaran" placeholder="Status Pendaftaran" value="{{ $siswa->status_pendaftaran }}" />
        </p>
        <p>
            <label for="status_pembayaran">Status Pembayaran: </label>
            <input type="text" name="status_pembayaran" placeholder="Status Pembayaran" value="{{ $siswa->status_pembayaran }}" />
        </p>
        <p>
            <label for="status_pembayaran_transfer">Status Pembayaran Transfer: </label>
            <input type="text" name="status_pembayaran_transfer" placeholder="Status Pembayaran Transfer" value="{{ $siswa->status_pembayaran_transfer }}" />
        </p>
        <p>
            <input type="submit" value="update" name="update" />
            <button type="button" onclick="window.location='{{ url('/list-siswa') }}'">Cancel</button>
        </p>

        </fieldset>


    </form>

    </body>
</html>