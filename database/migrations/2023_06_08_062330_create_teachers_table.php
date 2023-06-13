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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('attendance_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade')->onUpdate('restrict');
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade')->onUpdate('restrict');
            $table->foreign('attendance_id')->references('id')->on('attendances')->onDelete('cascade')->onUpdate('restrict');
            $table->foreign('user_id')->references('id')->on('users')->onDelete()->onDelete('cascade')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
