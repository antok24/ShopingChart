<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'mpegawai';
    protected $fillable = ['nip','nama_pegawai','tempat_lahir','tanggal_lahir','email'];
    protected $primaryKey = 'nip';
}
