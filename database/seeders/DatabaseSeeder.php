<?php

namespace Database\Seeders;

use App\Models\Users;
use App\Models\Student;
use App\Models\Project;
use App\Models\Programme;
use App\Models\Activity;
use App\Models\Attendance;
use App\Models\Submission;
use App\Models\Metric;
use App\Models\Award;
use App\Models\LeaderboardScore;
use App\Models\LmsModule;
use App\Models\LmsProgress;
use App\Models\ProjectMembership;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // --- Users (non‑students) ---
        Users::factory()->admin()->create([
            'given_name' => 'Admin',
            'surname'    => 'User',
            'email'      => 'admin@enactusza.org',
        ]);

        Users::factory()->count(3)->facultyAdvisor()->create();
        Users::factory()->count(2)->programmeManager()->create();
        Users::factory()->count(2)->businessAdvisor()->create();
        Users::factory()->count(3)->alumni()->create();

        // --- Students (each gets a user + student profile) ---
        $students = Student::factory()->count(30)->create();

        // --- Projects ---
        $projects = Project::factory()->count(15)->create();

        // --- Project Memberships ---
        // Attach each project to 2–5 random students
        foreach ($projects as $project) {
            $members = $students->random(rand(2, 5));
            foreach ($members as $student) {
                ProjectMembership::factory()->create([
                    'project_id' => $project->id,
                    'student_id' => $student->id,
                ]);
            }
        }

        // --- Programmes & Activities ---
        $programmes = Programme::factory()->count(8)->create();
        foreach ($programmes as $programme) {
            Activity::factory()->count(rand(2, 5))->create([
                'programme_id' => $programme->id,
            ]);
        }

        // --- Attendance ---
        $activities = Activity::all();
        foreach ($activities as $activity) {
            $attendees = $students->random(rand(5, 15));
            foreach ($attendees as $student) {
                Attendance::factory()->create([
                    'activity_id' => $activity->id,
                    'student_id'  => $student->id,
                ]);
            }
        }

        // --- Submissions ---
        foreach ($programmes->random(5) as $programme) {
            foreach ($projects->random(3) as $project) {
                Submission::factory()->create([
                    'programme_id' => $programme->id,
                    'project_id'   => $project->id,
                    'student_id'   => $project->memberships->random()->student_id,
                ]);
            }
        }

        // --- Metrics ---
        foreach ($projects as $project) {
            Metric::factory()->count(rand(2, 4))->create([
                'project_id' => $project->id,
            ]);
        }

        // --- Awards ---
        Award::factory()->count(10)->create();

        // --- Leaderboard Scores ---
        foreach ($projects->random(8) as $project) {
            LeaderboardScore::factory()->count(rand(1, 3))->create([
                'project_id' => $project->id,
            ]);
        }

        // --- LMS ---
        $modules = LmsModule::factory()->count(10)->create();
        foreach ($students as $student) {
            foreach ($modules->random(3) as $module) {
                LmsProgress::factory()->create([
                    'student_id' => $student->id,
                    'module_id'  => $module->id,
                ]);
            }
        }
    }
}