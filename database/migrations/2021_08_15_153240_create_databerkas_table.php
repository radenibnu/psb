<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataberkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('databerkas', function (Blueprint $table) {
            $table->id();
            $table->string('akte')->nullable();
            $table->string('kk')->nullable();
            $table->string('ijazahtk')->nullable();
            $table->string('ktporangtua')->nullable();
            $table->string('pasfoto')->nullable();
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
        Schema::dropIfExists('databerkas');
    }
}
