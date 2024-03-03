<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ContactsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(Faker $faker)
    {
        return [
            'category_id' => rand(1, 5),
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'gender' => rand(1, 3),
            'email' => $faker->email,
            'tell' => $faker->phoneNumber,
            'address' => $faker->address,
            'building' => $faker->buildingNumber,
            'detail' => $faker->paragraph,
        ];
    }
}
