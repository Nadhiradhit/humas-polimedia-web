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
        Schema::create('survey_intern', function (Blueprint $table) {
            $table->id();
            $table->string('school_name', 100);
            $table->string('intern_time', 100);
            $table->char('question_1');
            $table->char('question_2');
            $table->char('question_3');
            $table->char('question_4');
            $table->char('question_5');
            $table->char('question_6');
            $table->char('question_7');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survey_intern');
    }
};
