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
        Schema::create('bab1', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pt')->nullable();
            $table->string('alamat_pt')->nullable();
            $table->string('ijin_operasional_pt')->nullable();
            $table->string('scan_ijin_operasional_pt')->nullable();

            $table->string('status_akreditasi_institusi')->nullable();
            $table->string('status_akreditasi_institusi_mitra')->nullable();
            $table->string('akreditasi_prodi')->nullable();
            $table->string('akreditasi_prodi_mitra')->nullable();
            $table->string('negara_mitra')->nullable();

            $table->string('scan_status_akreditasi_institusi')->nullable();
            $table->string('nama_pt_mitra')->nullable();
            $table->string('alamat_pt_mitra')->nullable();
            $table->string('ijin_operasional_pt_mitra')->nullable();
            $table->string('scan_ijin_operasional_pt_mitra')->nullable();

            $table->string('scan_status_akreditasi_institusi_mitra')->nullable();

            $table->string('peringkat_internasional_mitra')->nullable();
            $table->string('nama_prodi')->nullable();
            $table->string('nama_prodi_mitra')->nullable();

            $table->string('scan_sk_akreditasi_prodi')->nullable();
            $table->string('scan_sk_akreditasi_prodi_mitra')->nullable();
            $table->string('scan_ijin_operasional_prodi')->nullable();
            $table->string('scan_ijin_operasional_prodi_mitra')->nullable();
            $table->string('proposal_usulan_kerjsama')->nullable();

            $table->timestamps();
        });

        Schema::table('proposal', function(Blueprint $table){
            $table->dropColumn('bab1');
            $table->foreignId('id_bab1')->nullable() ->references('id')->on('bab1');
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
            $table->dropForeign(['id_bab1']);
            $table->string('bab1')->nullable();
        });
        Schema::dropIfExists('bab1');
    }
};
