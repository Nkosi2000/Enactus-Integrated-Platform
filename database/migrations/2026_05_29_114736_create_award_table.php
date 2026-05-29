<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('award', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->nullable()->constrained('student')->onDelete('set null');
            $table->foreignId('project_id')->nullable()->constrained('project')->onDelete('set null');
            $table->string('name');
            $table->string('type');
            $table->date('date')->nullable();
            $table->timestamps();
        });

        $types = json_decode(
            file_get_contents(database_path('data/award_types.json')),
            true
        );
        $typesList = implode("','", $types);

        DB::statement("ALTER TABLE award ADD CONSTRAINT award_type_check CHECK (
            type IN ('{$typesList}')
        )");
    }

    public function down(): void
    {
        Schema::dropIfExists('award');
    }
};