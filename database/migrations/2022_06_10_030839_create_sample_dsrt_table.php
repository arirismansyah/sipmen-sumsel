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
        Schema::create('sample_dsrt', function (Blueprint $table) {
            $table->id();
            $table->char('kode_prov', 2);
            $table->char('kode_kab', 2);
            $table->char('kode_kec', 3);
            $table->char('kode_desa', 3);
            $table->char('nbs',4);
            $table->integer('nus');
            $table->string('nama_sls', 150);
            $table->string('nama_krt', 150);
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
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
        Schema::dropIfExists('sample_dsrt');
    }
};
