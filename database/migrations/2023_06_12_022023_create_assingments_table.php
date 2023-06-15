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
        Schema::create('assingments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('des');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('subject_id');
            $table->integer('order_id')->default('0')->index();
            $table->tinyInteger('status')->default('1')->comment("1=active, 2=inactive, -1=deleted")->index();
            $table->integer('created_by');
            $table->timestamp('created_at')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamp('updated_at')->nullable();

            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade')->onUpdate('restrict');
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assingments');
    }
};
