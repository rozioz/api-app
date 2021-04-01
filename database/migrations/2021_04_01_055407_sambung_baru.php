<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SambungBaru extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sambung_baru', function (Blueprint $table){
            $table->id();
            $table->string('sb_trx')->unique();
            $table->string('sb_nama',255);
            $table->string('sb_telp')->default('+62')->nullable();
            $table->text('sb_alamat');
            $table->string('sb_long')->nullable();
            $table->string('sb_lat')->nullable();
            $table->integer('sb_status_tanah');
            $table->datetime('sb_tgl_daftar');
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
        Schema::dropIfExists('sambung_baru');
    }
}
