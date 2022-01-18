<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pengguna extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('pengguna', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->string('nama');
      $table->string('email')->unique();
      $table->string('password');
      $table->text('alamat');
      $table->string('no_hp');
      $table->string('tempat_lahir');
      $table->date('tanggal_lahir');
      $table->string('jenis_kelamin');
      $table->string('agama');
      $table->string('sekolah_asal');
      $table->string('nama_ayah');
      $table->string('no_hp_ayah');
      $table->string('pekerjaan_ayah');
      $table->string('alamat_ayah');
      $table->string('nama_ibu');
      $table->string('no_hp_ibu');
      $table->string('pekerjaan_ibu');
      $table->string('alamat_ibu');
      $table->string('status_pendaftaran')->default('belum');
      $table->string('status_pembayaran')->default('belum');
      $table->string('status_pembayaran_transfer')->default('belum');
      $table->string('lvl')->default('siswa');


      $table->rememberToken();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('pengguna');
  }
}
