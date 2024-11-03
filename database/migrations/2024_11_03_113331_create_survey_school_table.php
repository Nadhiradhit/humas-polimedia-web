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
        Schema::create('survey_school', function (Blueprint $table) {
            $table->id();
            $table->string('shool_name', 100);
            $table->date('date_visit');
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
        Schema::dropIfExists('survey_school');
    }
};
