<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('majors', function (Blueprint $table) {
            $table->id('major_id');
            $table->string('name', 50)->nullable(false);
            $table->string('name_en', 50)->nullable(false);
            $table->timestamps();

        });

        $test = DB::table('majors')->insert([
            [
                'name'=>'เมจิ',
                'name_en'=>'meaji',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'=>'ดาว',
                'name_en'=>'daw',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'=>'นิ่ม',
                'name_en'=>'nim',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'=>'แยม',
                'name_en'=>'yam',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'=>'พลู',
                'name_en'=>'plu',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('majors');
    }
};
