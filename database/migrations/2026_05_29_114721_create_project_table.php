<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('university_id')->constrained('university');
            $table->date('start_date')->nullable();
            $table->string('current_stage')->default('startup');
            $table->string('sector')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        $stages = json_decode(
            file_get_contents(database_path('data/project_stages.json')),
            true
        );
        $stagesList = implode("','", $stages);

        DB::statement("ALTER TABLE project ADD CONSTRAINT project_stage_check CHECK (
            current_stage IN ('{$stagesList}')
        )");
    }

    public function down(): void
    {
        Schema::dropIfExists('project');
    }
};