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
        Schema::create('survey_guest', function (Blueprint $table) {
            $table->id();
            $table->string('guest_name', 100);
            $table->string('information_purpose', 100);
            $table->string('other_information_purpose',100)->nullable();
            $table->string('clarity_info', 100);
            $table->string('service_quality',100);
            $table->string('service_duration',100);
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survey_guest');
    }
};
