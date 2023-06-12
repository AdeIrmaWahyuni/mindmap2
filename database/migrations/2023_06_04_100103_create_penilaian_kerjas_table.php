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
        Schema::create('penilaian_kerjas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_butir');
            $table->string('bobot_penilaian');
            $table->string('elemen_penilaian');
            $table->string('deskriptor');
            $table->string('baik_jika');
            $table->string('hasil_asesmen');
            $table->integer('pemisah_id');
            $table->integer('users_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('penilaian_kerjas');
    }
};
