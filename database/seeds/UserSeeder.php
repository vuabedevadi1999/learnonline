<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0;$i<100;$i++){
            $data[] = [
                'fullName'=>$faker->name(),
                'sex'=>rand(1,2),
                'birthday'=>strtotime(now()),//(int)'16056'.rand(10000,99999),
                'email'=>$faker->safeEmail,
                'avatar'=>AVATARS[rand(0,4)],
                'country'=>$faker->country,
                'job'=>$faker->jobTitle,
                'status'=>STATUS_USER[rand(0,1)],
                'role'=>USER_ROLE[rand(0,1)],
                'created_at'=>now()
            ];
        }
        User::insert($data);
    }
}
