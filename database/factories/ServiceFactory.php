<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    $icons = ['bi-lightbulb', 'bi-tools', 'bi-truck', 'bi-bag-check', 'bi-house-door'];
    return [
        'name' => ucfirst($this->faker->words(2, true)),
        'icon' => $this->faker->randomElement($icons),
        'description' => $this->faker->sentence(12),
    ];
}

}
