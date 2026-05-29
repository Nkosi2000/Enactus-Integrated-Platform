<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('submission', function (Blueprint $table) {
            $table->id();
            $table->foreignId('programme_id')->constrained('programme')->onDelete('cascade');
            $table->foreignId('project_id')->nullable()->constrained('project')->onDelete('cascade');
            $table->foreignId('student_id')->nullable()->constrained('student')->onDelete('set null');
            $table->date('submission_date')->nullable();
            $table->json('data')->nullable();               // dynamic form data
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('submission');
    }
};