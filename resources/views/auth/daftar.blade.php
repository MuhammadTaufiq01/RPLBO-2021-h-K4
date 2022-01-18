<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Formulir Pendaftaran Peserta Didik Baru | Pesantren Al-Azhar</title>
</head>
<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif


    <form action="/proses-pendaftaran" method="POST">
        {{ csrf_field() }}
        <fieldset>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" required/>
        </p>
        <p>
            <label for="password">Password: </label>
            <input type="password" name="password" placeholder="Password" required/>
        </p>
        <p>
            <label for="email">Email: </label>
            <input type="text" name="email" placeholder="Email" required/>
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat" required></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        
        <p>
            <label for="no_hp">No Hp: </label>
            <input type="tel" name="no_hp" placeholder="No Hp" required/>
        </p>
        <p>
            <label for="tempat_lahir">Tempat Lahir: </label>
            <input type="text" name="tempat_lahir" required/>
        <p>
            <label for="tanggal_lahir">Tanggal Lahir: </label>
            <input type="date" name="tanggal_lahir" required/>
        <p>
            <label for="agama">Agama: </label>
            <select name="agama" required>
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="Sekolah Asal" required/>
        </p>
        <p>
            <label for="nama_ayah">Nama Ayah: </label>
            <input type="text" name="nama_ayah" placeholder="Nama Ayah" required/>
        </p>
        <p>
            <label for="no_hp_ayah">No HP Ayah: </label>
            <input type="tel" name="no_hp_ayah" placeholder="No HP Ayah" required/>
        </p>
        <p>
            <label for="pekerjaan_ayah">Pekerjaan Ayah: </label>
            <input type="text" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" required/>
        </p>
        <p>
            <label for="alamat_ayah">Alamat Ayah: </label>
            <input type="text" name="alamat_ayah" placeholder="Alamat Ayah" required/>
        </p>
        <p>
            <label for="nama_ibu">Nama Ibu: </label>
            <input type="text" name="nama_ibu" placeholder="Nama Ibu" required/>
        </p>
        <p>
            <label for="no_hp_ibu">No HP Ibu: </label>
            <input type="tel" name="no_hp_ibu" placeholder="No HP Ibu" required/>
        </p>
        <p>
            <label for="pekerjaan_ibu">Pekerjaan Ibu: </label>
            <input type="text" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" required/>
        </p>
        <p>
            <label for="alamat_ibu">Alamat Ibu: </label>
            <input type="text" name="alamat_ibu" placeholder="Alamat Ibu" required/>
        </p>

        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>
        <h3>Sudah Punya Akun? <a href="/login">Log in</a></h3>

        </fieldset>
    </form>

    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>