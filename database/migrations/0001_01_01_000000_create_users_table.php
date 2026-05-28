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
            // One-to-one with users – only students get a row here
            $table->foreignId('user_id')->unique()->constrained('users')->onDelete('cascade');

            // Academic linkage – campus carries the province automatically
            $table->foreignId('university_id')->constrained('university');
            $table->foreignId('campus_id')->nullable()->constrained('campus');
            $table->foreignId('faculty_id')->nullable();   // FK to a future faculty table

            $table->unsignedTinyInteger('year_of_study');

            // Student status within the platform (distinct from user role)
            $table->string('status')->default('active');
            // Values: 'active', 'alumni', 'inactive'

            // Demographic fields – all optional, all with a "prefer_not_to_say" option
            $table->string('gender')->nullable();
            $table->string('population_group')->nullable();
            $table->char('country_of_citizenship', 2)->nullable();   // ISO 3166-1 alpha-2
            $table->char('preferred_language', 2)->nullable();       // ISO 639-1 (ui language)
            $table->string('self_identified_home_language')->nullable();

            $table->timestamps();
        });

        // CHECK constraints for the controlled vocabularies
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