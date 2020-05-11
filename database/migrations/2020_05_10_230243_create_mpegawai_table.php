<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMpegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpegawai', function (Blueprint $table) {
            $table->string('nip',20)->primary();
            $table->string('nama_pegawai',100);
            $table->string('tanggal_lahir',10);
            $table->string('tempat_lahir', 100);
            $table->string('email', 100)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mpegawai');
    }
}
