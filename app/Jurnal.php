<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    protected $table = "tb_jurnal";
    protected $primaryKey = "id_jurnal";
    protected $fillable = ['id_jurnal','nama_penulis','kategori_id','judul','abstrak','katakunci','dokumen','referensi','tautan'];

    public function kategori()
    {
       
        return $this->belongsTo('App\Kategori','kategori_id')->withDefault();
    }

}