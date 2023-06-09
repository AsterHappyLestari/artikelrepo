<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = "tb_kategori";
    protected $primaryKey = "id_kategori";
    protected $fillable = ['id_kategori','kategori'];

    public function jurnal()
    {
        return $this->hasMany('App\Jurnal');
    }

}
