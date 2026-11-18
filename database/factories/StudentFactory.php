<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
class StudentFactory extends Factory { public function definition(): array {return ['nama'=>$this->faker->name(),'alamat'=>$this->faker->city(),'gender'=>$this->faker->randomElement(['L','P'])];} }
