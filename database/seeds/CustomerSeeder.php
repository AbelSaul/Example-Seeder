<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use Faker\Factory as Faker;
use App\Customer;


class CustomerSeeder extends Seeder
{
    public function run()

    {
    	$faker = Faker::create();
    	foreach (range(1,20) as $index) {
	        Customer::create([
	        	'name'=>$faker->firstName($gender=null|'male'|'female'),
	        	'last_name'=>$faker->lastName,
	        	'address'=>$faker->streetAddress,
	        	'country'=>$faker->country,
	        	'email'=>$faker->email,
	        	'company'=>$faker->company,
	        	'phoneNumber'=>$faker->phoneNumber

	        	//DELETE FROM customers;
				//ALTER TABLE customers AUTO_INCREMENT=1;
				//$php artisan db:seed


	        ]);
	     }
    }
}
?>