<?php

use Illuminate\Database\Seeder;
use App\Job;

//use Faker\Generator as Faker;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $faker->addProvider(new \Brunty\Faker\BuzzwordJobProvider($faker));
        Job::create([
            'company_id' => 1,
            'job_title' => $faker->jobTitle(), 
            'job_description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'requirements' => ['apartment', 'house', 'property insurance']
        ]);
        Job::create([
            'company_id' => 2,
            'job_title' => $faker->jobTitle(),
            'job_description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'requirements' => ['5 door car', '4 door car', 'driver\'s licence','car insurance']
        ]);
        Job::create([
            'company_id' => 3,
            'job_title' => $faker->jobTitle(),
            'job_description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'requirements' => ['social security number', 'work permit']
        ]);
        Job::create([
            'company_id' => 4,
            'job_title' => $faker->jobTitle(),
            'job_description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'requirements' => ['apartment', 'flat', 'house']
        ]);
        Job::create([
            'company_id' => 5,
            'job_title' => $faker->jobTitle(),
            'job_description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'requirements' => ['driver\'s licence', '2 door car', '3 door car', '4 door car', '5 door car']
        ]);
        Job::create([
            'company_id' => 6,
            'job_title' => $faker->jobTitle(),
            'job_description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'requirements' => ['scooter', 'bike', 'motorcycle', 'driver\'s licence', 'motorcycle insurance']
        ]);
        Job::create([
            'company_id' => 7,
            'job_title' => $faker->jobTitle(),
            'job_description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'requirements' => ['massage qualification certificate', 'liability insurance']
        ]);
        Job::create([
            'company_id' => 8,
            'job_title' => $faker->jobTitle(),
            'job_description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'requirements' => ['storage place', 'garage'] 
        ]);
        Job::create([
            'company_id' => 9,
            'job_title' => $faker->jobTitle(),
            'job_description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'requirements' => []
        ]);
        Job::create([
            'company_id' => 10,
            'job_title' => $faker->jobTitle(),
            'job_description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'requirements' => ['paypal account']
        ]);
    }
}
