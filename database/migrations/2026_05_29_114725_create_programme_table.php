<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('programme', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamps();
        });

        $types = json_decode(
            file_get_contents(database_path('data/programme_types.json')),
            true
        );
        $typesList = implode("','", $types);

        DB::statement("ALTER TABLE programme ADD CONSTRAINT programme_type_check CHECK (
            type IN ('{$typesList}')
        )");
    }

    public function down(): void
    {
        Schema::dropIfExists('programme');
    }
};