<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
class EmployeFactory extends Factory { public function definition(): array {return ['nama'=>$this->faker->name(),'alamat'=>$this->faker->city(),'gender'=>$this->faker->randomElement(['L','P']),'gaji'=>$this->faker->randomElement([1500000,2500000,3500000,5000000])];} }
