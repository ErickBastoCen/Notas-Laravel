<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Topic;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'anotaciones' => implode(' ', $this->faker->sentences()),
        'palabras_clave' => implode(' ', $this->faker->words()),
        'resumen' => $this->faker->paragraph(),
        'user_id' => User::inRandomOrder()->first()->id,
        'topic_id' => Topic::inRandomOrder()->first()->id,
    ];
}
}