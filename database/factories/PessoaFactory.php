<?php

namespace Database\Factories;

use App\Models\Pessoa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PessoaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pessoa::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'dtnasc' => $this->faker->date('Y-m-d'),
            'cpf' => "{$this->faker->randomDigit()}{$this->faker->randomDigit()}{$this->faker->randomDigit()}.{$this->faker->randomDigit()}{$this->faker->randomDigit()}{$this->faker->randomDigit()}.{$this->faker->randomDigit()}{$this->faker->randomDigit()}{$this->faker->randomDigit()}-{$this->faker->randomDigit()}{$this->faker->randomDigit()}",
            'celular' => $this->faker->phoneNumber(),
            'email' => $this->faker->safeEmail()
        ];
    }
}
