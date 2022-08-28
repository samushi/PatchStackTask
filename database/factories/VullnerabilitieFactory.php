<?php

namespace Database\Factories;

use App\Models\Vullnerabilitie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vullnerabilitie>
 */
class VullnerabilitieFactory extends Factory
{
    protected $model = Vullnerabilitie::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'description'   => fake()->text()
        ];
    }
}
