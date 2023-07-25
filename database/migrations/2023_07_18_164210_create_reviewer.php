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
        Schema::create('reviewer', function (Blueprint $table) {
            $table->id();
            $table->string('nama_reviewer')->nullable();
            $table->string('email')->nullable();
            $table->string('alamat')->nullable();
            $table->string('institusi')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });

        Schema::table('users', function(Blueprint $table){
            $table->dropColumn('reviewer');
            $table->foreignId('id_reviewer')->nullable() ->references('id')->on('reviewer');
        });

        Schema::table('proposal', function(Blueprint $table){
            $table->dropColumn('reviewer1');
            $table->foreignId('id_reviewer1')->nullable() ->references('id')->on('reviewer');
        });

        Schema::table('proposal', function(Blueprint $table){
            $table->dropColumn('reviewer2');
            $table->foreignId('id_reviewer2')->nullable() ->references('id')->on('reviewer');
        });

        Schema::table('reviewer_bab1', function(Blueprint $table){
            $table->foreignId('id_reviewer')->nullable() ->references('id')->on('reviewer');
        });
        Schema::table('reviewer_bab2', function(Blueprint $table){
            $table->foreignId('id_reviewer')->nullable() ->references('id')->on('reviewer');
        });
        Schema::table('reviewer_bab3', function(Blueprint $table){
            $table->foreignId('id_reviewer')->nullable() ->references('id')->on('reviewer');
        });
        Schema::table('reviewer_bab4', function(Blueprint $table){
            $table->foreignId('id_reviewer')->nullable() ->references('id')->on('reviewer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reviewer_bab4', function(Blueprint $table){
            $table->dropForeign(['id_reviewer']);
        });
        Schema::table('reviewer_bab3', function(Blueprint $table){
            $table->dropForeign(['id_reviewer']);
        });
        Schema::table('reviewer_bab2', function(Blueprint $table){
            $table->dropForeign(['id_reviewer']);
        });
        Schema::table('reviewer_bab1', function(Blueprint $table){
            $table->dropForeign(['id_reviewer']);
        });
        Schema::table('proposal', function(Blueprint $table){
            $table->dropForeign(['id_reviewer2']);
            $table->dropColumn('id_reviewer2');
            $table->string('reviewer2')->nullable();

            $table->dropForeign(['id_reviewer1']);
            $table->dropColumn('id_reviewer1');
            $table->string('reviewer1')->nullable();
        });
        Schema::table('users', function(Blueprint $table){
            $table->dropForeign(['id_reviewer']);
            $table->dropColumn('id_reviewer');
            $table->string('reviewer')->nullable();
        });
        Schema::dropIfExists('reviewer');




    }
};
