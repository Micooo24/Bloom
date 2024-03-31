<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $profileImageDirectory = public_path('profile_image');
        $profileImages = scandir($profileImageDirectory);
        
        // Remove . and .. from the list
        $profileImages = array_diff($profileImages, array('.', '..'));
        
        // Reset array keys to ensure proper indexing
        $profileImages = array_values($profileImages);
        
        return [
            'product_name' => $this->faker->name,
            'product_description' => $this->faker->text,
            'product_image' => 'profile_image/' . $this->faker->randomElement($profileImages),
            'product_price' => $this->faker->randomFloat(2, 0, 100),
            'created_at' =>   Carbon::now()->toDateTimeString(),
            'updated_at' =>  Carbon::now()->toDateTimeString(),
        ];
    }
}
