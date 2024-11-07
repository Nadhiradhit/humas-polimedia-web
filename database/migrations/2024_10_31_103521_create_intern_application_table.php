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
        Schema::create('intern_application', function (Blueprint $table) {
            $table->id();
            $table->string('name_school', 100);
            $table->integer('total_student');
            $table->json('name_student');
            $table->string('majority_school', 50);
            $table->string('student_class',20);
            $table->string('accompaying_teacher', 100);
            $table->date('submision_date');
            $table->string('contact_person', 100);
            $table->string('slug');
            $table->string('letter_intership');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('intern_application');
    }
};
