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
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');

            $table->string('full_name');
            $table->string('nisn');
            $table->string('email');
            $table->unsignedInteger('school_id')->nullable();
            $table->foreign('school_id')->references('id')->on('schools')->onUpdate('cascade')->onDelete('cascade');

            $table->string('phone_no');
            $table->string('father_phone_no');
            $table->string('mother_phone_no');

            $table->dateTime('register_date');
            $table->dateTime('end_date');

            $table->enum('reference_type', ['pegawai', 'siswa', 'alumni', 'guru_smp', 'calon_siswa', 'sosial_media', 'referensi_langsung'])->default('referensi_langsung');

            $table->string('reference_value');


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
        Schema::dropIfExists('students');
    }
};
