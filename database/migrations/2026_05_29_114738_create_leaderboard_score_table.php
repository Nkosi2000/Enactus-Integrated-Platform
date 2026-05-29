<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('leaderboard_score', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained('project')->onDelete('cascade');
            $table->string('period')->nullable();            // e.g. '2026-Q2'
            $table->decimal('score', 8, 2)->nullable();
            $table->string('stage');
            $table->timestamps();
        });

        $stages = json_decode(
            file_get_contents(database_path('data/leaderboard_stages.json')),
            true
        );
        $stagesList = implode("','", $stages);

        DB::statement("ALTER TABLE leaderboard_score ADD CONSTRAINT leaderboard_stage_check CHECK (
            stage IN ('{$stagesList}')
        )");
    }

    public function down(): void
    {
        Schema::dropIfExists('leaderboard_score');
    }
};