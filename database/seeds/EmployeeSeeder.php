<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $rows = [];
        for ($i = 0; $i < 200; $i++) {
            $date = $faker->dateTimeThisYear($max = 'now', $timezone = null);
            $rows[$i]['name'] = "$faker->firstName $faker->lastName";
            $rows[$i]['email'] = $faker->email;
            $rows[$i]['salary'] = $faker->numberBetween($min = 5, $max = 60) * 100;
            $rows[$i]['created_at'] = $date;
            $rows[$i]['updated_at'] = $date;
        }

        DB::table('employees')->insert($rows);
    }
}
