<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('university', function (Blueprint $table) {
            $table->id();
            $table->string('name', 250);
            $table->string('short_name', 50)->nullable();
        });

        $universities = json_decode(
            file_get_contents(database_path('data/universities.json')),
            true
        );

        foreach ($universities as $uni) {
            DB::table('university')->insert([
                'name' => $uni['name'],
                'short_name' => $uni['short_name'] ?? null,
            ]);
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('university');
    }
};