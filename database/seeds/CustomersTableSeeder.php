<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Customer;

class CustomersTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();
        foreach(range(1,50) as $index)
        {
            Customer::create([
               'name' => $faker->name,
                'age' => $faker->randomNumber(2),
                'phone' => $faker->phoneNumber
            ]);
        }
    }
}