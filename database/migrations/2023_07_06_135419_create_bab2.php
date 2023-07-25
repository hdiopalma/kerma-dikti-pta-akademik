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
        Schema::create('bab2', function (Blueprint $table) {

            $table->id();

            $table->longText('ringkasan_mou')->nullable();
            $table->string('file_mou')->nullable();
            $table->string('no_moa')->nullable();
            $table->longText('deskripsi_singkat_moa')->nullable();
            $table->date('tanggal_dimulai_moa')->nullable();
            $table->date('tanggal_berakhir_moa')->nullable();
            $table->string('file_moa')->nullable();
            $table->longText('misi_program_kerjasama')->nullable();
            $table->longText('target_program_kerjasama')->nullable();
            $table->longText('alasan_pemilihan_mitra')->nullable();
            $table->longText('prinsip_kerjasama')->nullable();
            $table->longText('manfaat_kerjasama')->nullable();
            $table->longText('tantangan_pelaksanaan_kerjasama')->nullable();
            $table->longText('kepemilikan_hak_cipta_paten')->nullable();
            $table->longText('mekanisme_resiprokal')->nullable();
            $table->longText('keberlanjutan_kerjsama')->nullable();
            $table->longText('hak_dan_kewajiban')->nullable();
            $table->enum('hak_tercantum', ['0', '1'])->nullable();

            $table->timestamps();
        });

        Schema::table('proposal', function(Blueprint $table){
            $table->dropColumn('bab2');
            $table->foreignId('id_bab2')->nullable() ->references('id')->on('bab2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proposal', function(Blueprint $table){
            $table->dropForeign(['id_bab2']);
            $table->string('bab2')->nullable();
        });
        Schema::dropIfExists('bab2');
    }
};
