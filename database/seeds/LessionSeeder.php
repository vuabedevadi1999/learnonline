<?php

use Illuminate\Database\Seeder;
use App\Lession;
class LessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        for($i=0;$i<5;$i++){
            $data[] = [
                'name'=>$faker->name,
                'shortDescription'=>$faker->text,
                'image'=>$faker->imageUrl(),
                'status'=>STATUS_USER[rand(0,1)],
                'created_at'=>now()
            ];
        }
        Lession::insert($data);
    }
}
