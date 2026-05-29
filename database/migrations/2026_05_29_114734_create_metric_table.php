<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('metric', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained('project')->onDelete('cascade');
            $table->string('reporting_period')->nullable();   // e.g. '2026-Q2'
            $table->decimal('revenue', 15, 2)->nullable();
            $table->integer('users')->nullable();
            $table->integer('jobs_created')->nullable();
            $table->integer('beneficiaries')->nullable();
            $table->decimal('funding_raised', 15, 2)->nullable();
            $table->decimal('cac', 10, 2)->nullable();        // Customer Acquisition Cost
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('metric');
    }
};