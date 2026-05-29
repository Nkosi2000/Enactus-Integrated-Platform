<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('attendance', function (Blueprint $table) {
            $table->id();
            $table->foreignId('activity_id')->constrained('activity')->onDelete('cascade');
            $table->foreignId('student_id')->constrained('student')->onDelete('cascade');
            $table->string('status')->default('attended');
            $table->timestamps();

            $table->unique(['activity_id', 'student_id']);
        });

        $statuses = json_decode(
            file_get_contents(database_path('data/attendance_statuses.json')),
            true
        );
        $statusList = implode("','", $statuses);

        DB::statement("ALTER TABLE attendance ADD CONSTRAINT attendance_status_check CHECK (
            status IN ('{$statusList}')
        )");
    }

    public function down(): void
    {
        Schema::dropIfExists('attendance');
    }
};