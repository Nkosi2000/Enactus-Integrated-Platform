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

        DB::table('campus')->insert([
            // CPUT
            ['university_id' => 1, 'name' => 'Bellville Campus', 'province_id' => 9],
            ['university_id' => 1, 'name' => 'District 6 Campus', 'province_id' => 9],
            // CUT
            ['university_id' => 2, 'name' => 'Bloemfontein Campus', 'province_id' => 2],
            ['university_id' => 2, 'name' => 'Welkom Campus', 'province_id' => 2],
            // DUT
            ['university_id' => 3, 'name' => 'Durban Campus', 'province_id' => 4],
            ['university_id' => 3, 'name' => 'Pietermaritzburg Campus', 'province_id' => 4],
            // WSU
            ['university_id' => 4, 'name' => 'Mthatha Campus', 'province_id' => 1],
            ['university_id' => 4, 'name' => 'Butterworth Campus', 'province_id' => 1],
            ['university_id' => 4, 'name' => 'East London Campus', 'province_id' => 1],
            ['university_id' => 4, 'name' => 'Queenstown Campus', 'province_id' => 1],
            // MUT
            ['university_id' => 5, 'name' => 'uMlazi Campus', 'province_id' => 4],
            // NMU
            ['university_id' => 6, 'name' => 'Gqeberha Campus', 'province_id' => 1],
            // NWU
            ['university_id' => 7, 'name' => 'Vanderbijlpark Campus', 'province_id' => 3],
            ['university_id' => 7, 'name' => 'Potchefstroom Campus', 'province_id' => 8],
            ['university_id' => 7, 'name' => 'Mafikeng Campus', 'province_id' => 8],
            // Rhodes
            ['university_id' => 8, 'name' => 'Makhanda Campus', 'province_id' => 1],
            // SMU
            ['university_id' => 9, 'name' => 'Pretoria Campus', 'province_id' => 3],
            // SPU
            ['university_id' => 10, 'name' => 'Kimberley Campus', 'province_id' => 7],
            // SU
            ['university_id' => 11, 'name' => 'Stellenbosch Campus', 'province_id' => 9],
            // TUT
            ['university_id' => 12, 'name' => 'Pretoria Campus', 'province_id' => 3],
            // TARDI
            ['university_id' => 13, 'name' => 'Tsolo Campus', 'province_id' => 1],
            // UCT
            ['university_id' => 14, 'name' => 'Cape Town Campus', 'province_id' => 9],
            // UFH
            ['university_id' => 15, 'name' => 'Alice Campus', 'province_id' => 1],
            ['university_id' => 15, 'name' => 'East London Campus', 'province_id' => 1],
            // UJ
            ['university_id' => 16, 'name' => 'Johannesburg Campus', 'province_id' => 3],
            // UKZN
            ['university_id' => 17, 'name' => 'Durban Campus', 'province_id' => 4],
            ['university_id' => 17, 'name' => 'Pietermaritzburg Campus', 'province_id' => 4],
            // UL
            ['university_id' => 18, 'name' => 'Polokwane Campus', 'province_id' => 5],
            // UMP
            ['university_id' => 19, 'name' => 'Mbombela Campus', 'province_id' => 6],
            // UP
            ['university_id' => 20, 'name' => 'Pretoria Campus', 'province_id' => 3],
            // UFS
            ['university_id' => 21, 'name' => 'Bloemfontein Campus', 'province_id' => 2],
            ['university_id' => 21, 'name' => 'QwaQwa Campus', 'province_id' => 2],
            // UWC
            ['university_id' => 22, 'name' => 'Bellville Campus', 'province_id' => 9],
            // Wits
            ['university_id' => 23, 'name' => 'Johannesburg Campus', 'province_id' => 3],
            // Univen
            ['university_id' => 24, 'name' => 'Thohoyandou Campus', 'province_id' => 5],
            // UniZulu
            ['university_id' => 25, 'name' => 'KwaDlangezwa Campus', 'province_id' => 4],
            ['university_id' => 25, 'name' => 'Richards Bay Campus', 'province_id' => 4],
            // VUT
            ['university_id' => 26, 'name' => 'Vanderbijlpark Campus', 'province_id' => 3],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('campus');
    }
};