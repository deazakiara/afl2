<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        // Random product names
        $productNames = [
            'Minimalist Table Lamp',
            'Modern Floor Lamp',
            'Nordic Bedside Lamp',
            'Wooden Desk Light',
            'Sleek Pendant Light',
            'Classic Reading Lamp',
            'Studio Spotlight',
            'Ambient Wall Lamp',
            'Smart LED Light',
            'Adjustable Task Lamp',
        ];

        $name = $this->faker->randomElement($productNames);

        return [
            'category_id' => \App\Models\Category::inRandomOrder()->first()?->id ?? 1,
            'name' => $name,
            'slug' => Str::slug($name) . '-' . $this->faker->unique()->numberBetween(1, 999),
            'image' => 'images/sample-product.jpg',
            'price' => $this->faker->numberBetween(50000, 250000),
            'short_description' => $this->faker->randomElement([
                'A stylish and functional lighting piece for any modern space.',
                'Designed to create a warm and cozy atmosphere.',
                'Minimal design meets perfect illumination.',
                'Brighten up your home with this elegant lamp.',
                'Crafted for both design lovers and professionals.',
            ]),
            'long_description' => $this->faker->randomElement([
                'This lamp combines modern design with subtle lighting to enhance your workspace or living area. Made from high-quality materials, it provides a soft and inviting glow perfect for reading or relaxation.',
                'A blend of simplicity and sophistication. Each lamp is crafted to deliver both functionality and visual appeal, making it an ideal addition to any modern interior.',
                'Designed for everyday comfort, this lighting piece offers adjustable brightness and sleek aesthetics. Its compact build makes it perfect for desks, shelves, or bedside tables.',
                'Bring elegance into your home with this minimalist lamp that emphasizes form and function. Built to last and crafted for those who appreciate design excellence.',
            ]),
        ];
    }
}
