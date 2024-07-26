<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Clock;
use App\Models\User;
use Carbon\Carbon;
use Faker\Factory as Faker;
class ClockSeeder extends Seeder
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
            Clock::create([
                'user_id' => $faker->randomElement($userIds),
                'start_datetime' => $faker->dateTimeThisMonth(),
                'end_datetime' => $faker->dateTimeThisMonth(),
            ]);
        }
    }
}
