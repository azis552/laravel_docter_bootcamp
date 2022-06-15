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
        Schema::table('appointment', function (Blueprint $table) {
           $table->foreignId('dokter_id','fk_appointment_to_dokter')->references('id')->on('dokter')->onUpdate('cascade')->onDelete('cascade');
           $table->foreignId('user_id','fk_appointment_to_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
           $table->foreignId('consultation_id','fk_appointment_to_consultation')->references('id')->on('consultation')->onUpdate('cascade')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('appointment', function (Blueprint $table) {
            //
        });
    }
};
