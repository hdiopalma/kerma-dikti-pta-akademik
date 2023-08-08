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
        Schema::create('verifikator', function (Blueprint $table) {
            $table->id();
            $table->string('nama_verifikator')->nullable();
            $table->string('email')->nullable();
            $table->string('alamat')->nullable();
            $table->string('institusi')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });

        Schema::table('users', function(Blueprint $table){
            $table->foreignId('id_verifikator')->nullable() ->references('id')->on('verifikator');
        });

        Schema::table('proposal', function(Blueprint $table){
            $table->foreignId('id_verifikator')->nullable() ->references('id')->on('verifikator');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table ('users', function(Blueprint $table){
            $table->dropForeign(['id_verifikator']);
            $table->dropColumn('id_verifikator');
        });

        Schema::table ('proposal', function(Blueprint $table){
            $table->dropForeign(['id_verifikator']);
            $table->dropColumn('id_verifikator');
        });

        Schema::dropIfExists('verifikator');
    }
};
