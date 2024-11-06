<?php

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
        Schema::create('school_visit', function (Blueprint $table) {
            $table->id();
            $table->string('school_name', 100);
            $table->string('total_student', 20);
            $table->string('school_majority', 50);
            $table->string('student_class', 20);
            $table->string('total_teacher', 20);
            $table->date('submision_date');
            $table->string('time_visit', 20);
            $table->enum('request_program', [
                'D4 Teknologi Rekayasa Pengemasan',
                'D4 Teknologi Rekayasa Multimedia',
                'D4 Teknologi Permainan',
                'D4 Animasi',
                'D4 Desain Mode',
                'D4 Produksi Film dan TV',
                'D4 Pengelolaan Perhotelan',
                'D3 Teknik Pemeliharaan Mesin',
                'D3 Teknik Grafika',
                'D3 Desain Grafis',
                'D3 Penerbitan',
                'D3 Fotografi',
                'D3 Periklanan',
                'D3 Penyiaran',
                'D3 Seni Kuliner',
            ]);
            $table->string('contact_person', 100);
            $table->string('letter_visit');
            $table->string('more_information');
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_visit');
    }
};
