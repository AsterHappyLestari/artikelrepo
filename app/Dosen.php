<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = "tb_dosen";
    protected $primaryKey = "id_dosen";
    protected $fillable = ['nip','nama_dosen','jenisk','notelp_dosen','alamat_dosen','email'];
}
