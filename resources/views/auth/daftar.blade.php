<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Formulir Pendaftaran Peserta Didik Baru | Pesantren Al-Azhar</title>
</head>
<body style="margin:10vh 50vh">
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>
    <br>
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @endif
    


    <form action="/proses-pendaftaran" method="POST">
        {{ csrf_field() }}
        <fieldset>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email"  required/>
                <div id="email" class="form-text">We'll never share your email with anyone else.</div>
              </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" id="nama"  required/>
              </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required/>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="address" class="form-control" name="alamat" id="alamat"  required/>
              </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="laki-laki">
                    <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="perempuan">
                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                  </div>
              </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No Hp</label>
                <input type="tel" class="form-control" name="no_hp" id="no_hp"  required/>
              </div>
            <div class="mb-3">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir"  required/>
              </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir"  required/>
              </div>
            <div class="mb-3">
                <label for="agama" class="form-label">Agama: </label>
                <select class="form-select" aria-label="Default select example">
                    <option selected value="agama">-</option>
                  <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Budha">Budha</option>
                </select>
              </div>
            <div class="mb-3">
                <label for="sekolah_asal" class="form-label">Sekolah Asal</label>
                <input type="text" class="form-control" name="sekolah_asal" id="sekolah_asal"  required/>
              </div>
            <div class="mb-3">
                <label for="nama_ayah" class="form-label">Nama Ayah</label>
                <input type="text" class="form-control" name="nama_ayah" id="nama_ayah"  required/>
              </div>
            
            <div class="mb-3">
                <label for="no_hp_ayah" class="form-label">No HP Ayah</label>
                <input type="tel" class="form-control" name="no_hp_ayah" required/>
            </div>
            <div class="mb-3">
                <label for="pekerjaan_ayah" class="form-label">Pekerjaan Ayah</label>
                <input type="text" class="form-control" name="pekerjaan_ayah" required/>
            </div>
            <div class="mb-3">
                <label for="alamat_ayah" class="form-label">Alamat Ayah</label>
                <input type="address" class="form-control" name="alamat_ayah" required/>
            </div>
            <div class="mb-3">
                <label for="nama_ibu" class="form-label">Nama Ibu</label>
                <input type="text" class="form-control" name="nama_ibu" required/>
            </div>
            <div class="mb-3">
                <label for="no_hp_ibu" class="form-label">No HP Ibu</label>
                <input type="tel" class="form-control" name="no_hp_ibu" required/>
            </div>
            <div class="mb-3">
                <label for="pekerjaan_ibu" class="form-label">Pekerjaan Ibu</label>
                <input type="text" class="form-control" name="pekerjaan_ibu" required/>
            </div>
            <div class="mb-3">
                <label for="alamat_ibu" class="form-label">Alamat Ibu</label>
                <input type="address" class="form-control" name="alamat_ibu" required/>
            </div>
            <button type="submit" class="btn btn-primary">Daftar</button>
            <h5>Sudah Punya Akun? <a href="/login">Log in</a></h5>

        </fieldset>
    </form>

    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>