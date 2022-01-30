<?php

namespace Database\Factories;

use App\Models\rasta;
use Illuminate\Database\Eloquent\Factories\Factory;

class RastaFactory extends Factory
{
    protected $model=rasta::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->sentence(),
            'title'=>$this->faker->firstName(),
            'description'=>$this->faker->paragraph(),
            'img'=>$this->faker->imageUrl(),
            'location'=>$this->faker->country()
        ];
    }
}
