<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kec', function (Blueprint $table) {
            $table->id();
            $table->char('kode_prov',2);
            $table->char('kode_kab',2);
            $table->char('kode_kec', 3);
            $table->string('nama_kec', 150);
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
        Schema::dropIfExists('kec');
    }
};
