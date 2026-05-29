<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('campus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('university_id')->constrained('university');
            $table->string('name', 200);
            $table->foreignId('province_id')->constrained('province');
        });

        // Build lookup maps
        $provinces = DB::table('province')->pluck('id', 'name');
        $universities = DB::table('university')->pluck('id', 'short_name');

        $campuses = json_decode(
            file_get_contents(database_path('data/campuses.json')),
            true
        );

        foreach ($campuses as $campus) {
            $universityId = $universities[$campus['university_short_name']] ?? null;
            $provinceId = $provinces[$campus['province_name']] ?? null;

            if (!$universityId || !$provinceId) {
                throw new \Exception("Could not map campus '{$campus['name']}' to university or province.");
            }

            DB::table('campus')->insert([
                'university_id' => $universityId,
                'name' => $campus['name'],
                'province_id' => $provinceId,
            ]);
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('campus');
    }
};