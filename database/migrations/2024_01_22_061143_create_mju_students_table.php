<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// ส่วนนี้กำหนดคลาสที่ไม่มีชื่อ (anonymous class) ซึ่ง extends จากคลาส Migration

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // สร้างตารางใหม่ชื่อ 'mju_students' โดยใช้ Blueprint
        Schema::create('mju_students', function (Blueprint $table) {
            $table->string('student_code', 15)->primary();
            $table->string('first_name', 50)->nullable(false);
            $table->string('last_name', 50)->nullable();
            $table->string('first_name_en', 50)->nullable(false);
            $table->string('last_name_en', 50)->nullable();
            $table->unsignedBigInteger('major_id')->nullable(false);
            $table->foreign('major_id')->references('major_id')->on('majors');
            $table->string('idcard', 20)->nullable(false);
            $table->date('birthdate')->nullable();
            $table->char('gender', 1)->nullable();
            $table->string('address', 500)->nullable();
            $table->string('phone', 50)->nullable();
            $table->string('email', 50)->nullable();
            $table->timestamps();
     } );


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mju_students');
    }
};
