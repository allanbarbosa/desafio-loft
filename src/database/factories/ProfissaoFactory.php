<?php

namespace Database\Factories;

use App\Models\Profissao;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfissaoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profissao::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => 'warrior',
            'ponto_vida' => 20,
            'forca' => 10,
            'destreza' => 5,
            'inteligencia' => 5,
            'modificador_ataque' => '80% da Força + 20% da Destreza',
            'modificador_velocidade' => '60% da Destreza + 20% da Inteligência'
        ];
    }
}
