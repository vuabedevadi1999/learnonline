<?php

use Illuminate\Database\Seeder;
use App\Questionnaire;
class QuestionnaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0;$i<25;$i++){
            $data[] = [
                'question'=>$faker->sentence(6, true).'?',
                'answer1'=>$faker->city,
                'answer2'=>$faker->city,
                'answer3'=>$faker->city,
                'answer4'=>$faker->city,
                'status'=>STATUS_USER[rand(0,1)],
                'correctAnswer'=>$faker->city,
                'images'=>$faker->imageUrl(),
                'lession_id'=>rand(1,4),
                'created_at'=>now()
            ];
        }
        Questionnaire::insert($data);
    }
}
