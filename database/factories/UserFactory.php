<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'first_name' => '田中',
            'last_name' => 'まさとし',
            'age' => 49,
            'prefectures' => '埼玉県',
            'municipalities' => 'さいたま市',
            'address' => '北区奈良町',
            'building_name' => '別所ハイム',
            'profession_id' => 1,
            'hobby' => 'ふぇふぇf',
            'personality_id' => 1,
            'other' => 'ふぇふぇふぇ',
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
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
