<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class Pengguna extends Authenticatable
{
  use HasFactory, Notifiable;


  protected $table = 'pengguna';
  // protected $primaryKey = 'id';
  protected $fillable = [
    'nama',
    'email',
    'password',
    'alamat',
    'no_hp',
    'tempat_lahir',
    'tanggal_lahir',
    'jenis_kelamin',
    'agama',
    'sekolah_asal',
    'nama_ayah',
    'no_hp_ayah',
    'pekerjaan_ayah',
    'alamat_ayah',
    'nama_ibu',
    'no_hp_ibu',
    'pekerjaan_ibu',
    'alamat_ibu',
    'status_pendaftaran',
    'status_pembayaran',
    'status_pembayaran_transfer',
  ];

  protected $hidden = [
    'password',
    'lvl',
  ];

  public function getAuthPassword()
  {
    return $this->password;
  }
}
