<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;
use App\Models\User;
use Faker\Factory as Faker;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $userIds = User::pluck('id')->toArray();

        foreach (range(1, 10) as $index) {
            Task::create([
                'user_id' => $faker->randomElement($userIds),
                'title' => $faker->word,
                'description' => $faker->sentence,
                'status' => $faker->randomElement(['to-do', 'in-progress', 'completed']),
            ]);
        }
    }
}
