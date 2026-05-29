<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lms_progress', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('student')->onDelete('cascade');
            $table->foreignId('module_id')->constrained('lms_module')->onDelete('cascade');
            $table->string('completion_status')->default('not_started');
            $table->decimal('score', 5, 2)->nullable();
            $table->timestamps();

            $table->unique(['student_id', 'module_id']);
        });

        $statuses = json_decode(
            file_get_contents(database_path('data/completion_statuses.json')),
            true
        );
        $statusList = implode("','", $statuses);

        DB::statement("ALTER TABLE lms_progress ADD CONSTRAINT lms_progress_status_check CHECK (
            completion_status IN ('{$statusList}')
        )");
    }

    public function down(): void
    {
        Schema::dropIfExists('lms_progress');
    }
};