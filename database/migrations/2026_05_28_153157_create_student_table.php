<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->unique()->constrained('users')->onDelete('cascade');
            $table->foreignId('university_id')->constrained('university');
            $table->foreignId('campus_id')->nullable()->constrained('campus');
            $table->foreignId('faculty_id')->nullable();
            $table->unsignedTinyInteger('year_of_study');
            $table->string('status')->default('active');
            $table->string('gender')->nullable();
            $table->string('population_group')->nullable();
            $table->char('country_of_citizenship', 2)->nullable();
            $table->char('preferred_language', 2)->nullable();
            $table->string('self_identified_home_language')->nullable();
            $table->timestamps();
        });

        // Build CHECK constraints from JSON files
        $statuses = json_decode(
            file_get_contents(database_path('data/student_statuses.json')),
            true
        );
        $genders = json_decode(
            file_get_contents(database_path('data/genders.json')),
            true
        );
        $populationGroups = json_decode(
            file_get_contents(database_path('data/population_groups.json')),
            true
        );
        $homeLanguages = json_decode(
            file_get_contents(database_path('data/home_languages.json')),
            true
        );

        $statusList = implode("','", $statuses);
        $genderList = implode("','", $genders);
        $populationList = implode("','", $populationGroups);
        $languageList = implode("','", $homeLanguages);

        DB::statement("ALTER TABLE student ADD CONSTRAINT student_status_check CHECK (
            status IN ('{$statusList}')
        )");

        DB::statement("ALTER TABLE student ADD CONSTRAINT student_gender_check CHECK (
            gender IN ('{$genderList}')
        )");

        DB::statement("ALTER TABLE student ADD CONSTRAINT student_population_group_check CHECK (
            population_group IN ('{$populationList}')
        )");

        DB::statement("ALTER TABLE student ADD CONSTRAINT student_home_language_check CHECK (
            self_identified_home_language IN ('{$languageList}')
        )");
    }

    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};