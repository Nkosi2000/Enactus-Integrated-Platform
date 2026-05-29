<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('project_membership', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('student')->onDelete('cascade');
            $table->foreignId('project_id')->constrained('project')->onDelete('cascade');
            $table->string('role')->nullable();               // e.g. President, VP, Project Lead
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamps();

            $table->unique(['student_id', 'project_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('project_membership');
    }
};