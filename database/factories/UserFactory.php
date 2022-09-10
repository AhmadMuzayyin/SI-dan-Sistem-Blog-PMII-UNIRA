<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use function PHPSTORM_META\map;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fullname' => fake()->name(),
            'username' => fake()->unique()->userName(),
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt(12345), // password
            'phone' => fake()->phoneNumber(),
            'address' => fake()->streetAddress(),
            'user_images' => 'profile-img.jpg',
            'role' => 1,
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
