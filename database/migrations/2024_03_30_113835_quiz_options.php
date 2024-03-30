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
        Schema::create('quizOptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('quiz_qst');
            $table->string('option_text');
            $table->string('true_option');
            $table->foreign('quiz_qst')->references('id')->on('quizQuestions')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
