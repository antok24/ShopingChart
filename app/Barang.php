<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'mbarang';
    protected $fillable = ['kode_barang', 'nama_barang', 'tahun_perolehan'];
    protected $primaryKey = 'kode_barang';
}
