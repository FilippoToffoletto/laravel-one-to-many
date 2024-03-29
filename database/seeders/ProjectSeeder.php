<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 50; $i++){
            $new_project = new Project();
            $new_project->name = $faker->sentence();
            $new_project->slug = Project::generateSlug($new_project->title);
            $new_project->client_name = $faker->sentence(5);
            $new_project->summary = $faker->text();
            $new_project->cover_image = 'https://www.labfriend.com.au/static/assets/images/shared/default-image.png';
            //dump($new_project);
            $new_project->save();
        }
    }
}
