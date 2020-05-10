<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Translator extends Model
{
    protected $fillable = ['nik', 'nama', 'ijazah', 'bidang_keahlian'];
}
