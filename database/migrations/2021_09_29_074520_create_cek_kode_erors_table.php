<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCekKodeErorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cek_kode_erors', function (Blueprint $table) {
            $table->id('idKode');
            $table->string('kodeEror');
            $table->string('keterangan');
            $table->string('jenisTransaksi');
            $table->string('tindakan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cek_kode_erors');
    }
}
