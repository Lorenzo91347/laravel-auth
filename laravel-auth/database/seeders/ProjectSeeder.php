<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker; 
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $project = new Project();
        $project->title = $faker->sentence(5);
        $project->content = $faker->text();
        $project->slug = Str::of($project->title)->slug('-');

        $project->save();
    }
}
