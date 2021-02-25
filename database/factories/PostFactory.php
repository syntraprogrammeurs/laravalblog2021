<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = User::pluck('id')->toArray();
        return [
            //
            'user_id' => $this->faker->randomElement($users),
            'category_id'=>$this->faker->numberBetween(1, 2),
            'photo_id' => $this->faker->numberBetween(1, 3),
            'title'=> $this->faker->sentence(),
            'body'=> $this->faker->realText(),
        ];
    }
}
