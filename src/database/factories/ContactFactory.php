<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

class ContactFactory extends Factory
{   
    protected $model=Contact::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fullname'=>$this->faker->name,
            'gender'=>$this->faker->boolean,
            'email'=>$this->faker->safeEmail,
            'postcode'=>$this->faker->postcode,
            'address'=>$this->faker->address,
            'building_name'=>$this->faker->company,
            'opinion'=>$this->faker->realText,
        ];
    }
}
