<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('province', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique();
        });

        $provinces = json_decode(
            file_get_contents(database_path('data/provinces.json')),
            true
        );

        foreach ($provinces as $province) {
            DB::table('province')->insert(['name' => $province]);
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('province');
    }
};