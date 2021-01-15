<?php

use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0;$i<10;$i++){
            $data[] = [
                'name'=>CLASSNAME[$i],
                'subject'=>SUBJECT[$i],
                'status'=>STATUS_USER[rand(0,1)],
                'avatar'=>AVATAR_SUBJECT[$i],
                'created_at'=>now()
            ];
        }
        \App\Classes::insert($data);
    }
}
