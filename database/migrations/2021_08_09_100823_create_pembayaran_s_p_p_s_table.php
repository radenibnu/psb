<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranSPPSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran_s_p_p_s', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('nis')->nullable();
            $table->string('kelas')->nullable();
            $table->integer('kategoribayar')->nullable();
            $table->string('bulan')->nullable();
            $table->string('keterangan')->nullable();
            $table->softDeletes('deleted_at');
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
        Schema::dropIfExists('pembayaran_s_p_p_s');
    }
}
