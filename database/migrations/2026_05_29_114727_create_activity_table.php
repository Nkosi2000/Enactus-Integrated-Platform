<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('activity', function (Blueprint $table) {
            $table->id();
            $table->foreignId('programme_id')->constrained('programme')->onDelete('cascade');
            $table->string('name');
            $table->date('date')->nullable();
            $table->string('type')->nullable();
            $table->timestamps();
        });

        $types = json_decode(
            file_get_contents(database_path('data/activity_types.json')),
            true
        );
        $typesList = implode("','", $types);

        DB::statement("ALTER TABLE activity ADD CONSTRAINT activity_type_check CHECK (
            type IN ('{$typesList}')
        )");
    }

    public function down(): void
    {
        Schema::dropIfExists('activity');
    }
};