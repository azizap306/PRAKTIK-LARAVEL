<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
class ArticleFactory extends Factory { public function definition(): array {return ['author'=>$this->faker->name(),'title'=>$this->faker->sentence(6),'article'=>$this->faker->paragraphs(3,true),'publish_at'=>$this->faker->date()];} }
