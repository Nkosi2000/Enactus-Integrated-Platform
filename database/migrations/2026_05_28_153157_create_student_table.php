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
            $table->foreignId('user_id')->unique()->constrained('users')->onDelete('cascade');
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

        DB::statement("ALTER TABLE student ADD CONSTRAINT student_status_check CHECK (
            status IN ('active','alumni','inactive')
        )");

        DB::statement("ALTER TABLE student ADD CONSTRAINT student_gender_check CHECK (
            gender IN ('male','female','non_binary','prefer_not_to_say')
        )");

        DB::statement("ALTER TABLE student ADD CONSTRAINT student_population_group_check CHECK (
            population_group IN ('black_african','coloured','indian_or_asian','white','other','prefer_not_to_say')
        )");

        DB::statement("ALTER TABLE student ADD CONSTRAINT student_home_language_check CHECK (
            self_identified_home_language IN (
                'english','afrikaans','isindebele','isixhosa','isizulu','sepedi',
                'sesotho','setswana','siswati','tshivenda','xitsonga','other',
                'prefer_not_to_say'
            )
        )");
    }

    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};