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
        Schema::create('surat_pengiriman', function (Blueprint $table) {
            $table->id();
            $table->char('kode_prov', 2);
            $table->char('kode_kab', 2);
            $table->char('kode_kec', 3);
            $table->char('kode_desa', 3);
            $table->char('nbs', 4);
            $table->string('nomor_surat');
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
        Schema::dropIfExists('surat_pengiriman');
    }
};
