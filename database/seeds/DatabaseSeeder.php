<?php
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use App\Customer;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::table('customers')->delete();
        $this->call(CustomersTableSeeder::class);
        Model::reguard();
    }


}


class CustomersTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();
        foreach(range(1, 50) as $index)
        {
            Customer::create([
                'name' => $faker->name,
                'age' => $faker->randomNumber(2),
                'phone' => $faker->phoneNumber
            ]);

        }
    }
}