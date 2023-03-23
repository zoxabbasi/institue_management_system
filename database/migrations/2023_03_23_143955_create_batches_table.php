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
        Schema::create('batches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shift_id')->references('id')->on('shifts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('course_id')->references('id')->on('courses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('teacher_id')->references('id')->on('teachers')->onDelete('cascade')->onUpdate('cascade');
            $table->date('starting_date');
            $table->date('ending_date');
            $table->integer('seats');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batches');
    }
};
