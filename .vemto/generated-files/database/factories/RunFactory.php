<?php

namespace Database\Factories;

use App\Models\Run;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class RunFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Run::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'attachments' => fake()->word(),
            'log' => fake()->word(),
            'title' => fake()->sentence(10),
        ];
    }
}
