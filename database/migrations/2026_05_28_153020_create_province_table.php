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

        DB::table('province')->insert([
            ['name' => 'Eastern Cape'],
            ['name' => 'Free State'],
            ['name' => 'Gauteng'],
            ['name' => 'KwaZulu-Natal'],
            ['name' => 'Limpopo'],
            ['name' => 'Mpumalanga'],
            ['name' => 'Northern Cape'],
            ['name' => 'North West'],
            ['name' => 'Western Cape'],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('province');
    }
};