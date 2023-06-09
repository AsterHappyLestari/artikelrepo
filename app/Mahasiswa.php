<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Authenticatable
{
    use Notifiable;

    protected $table = "tb_mahasiswa";
    protected $primaryKey = "id_mhs";
    protected $fillable = ['nim','level','nama_mhs','jenisk','notelp_mhs','alamat_mhs','email','password','prodi'];
   
    protected $hidden = [
        'password',
    ];


}
