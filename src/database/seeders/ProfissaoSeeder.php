<?php

namespace Database\Seeders;

use App\Models\Profissao;
use Illuminate\Database\Seeder;

class ProfissaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            [
                'nome' => 'Warrior',
                'ponto_vida' => 20,
                'forca' => 10,
                'destreza' => 5,
                'inteligencia' => 5,
                'modificador_ataque' => '80% da Força + 20% da Destreza',
                'modificador_velocidade' => '60% da Destreza + 20% da Inteligência'
            ],
            [
                'nome' => 'Thief',
                'ponto_vida' => 15,
                'forca' => 4,
                'destreza' => 10,
                'inteligencia' => 4,
                'modificador_ataque' => '25% da Força + 100% da Destreza + 25% da Inteligência',
                'modificador_velocidade' => '80% da Destreza'
            ],
            [
                'nome' => 'Mage',
                'ponto_vida' => 12,
                'forca' => 5,
                'destreza' => 6,
                'inteligencia' => 10,
                'modificador_ataque' => '20% da Força + 50% da Destreza + 150% da Inteligência',
                'modificador_velocidade' => '20% da Força + 50% da Destreza'
            ]
        ];

        foreach ($dados as $dado) {

            $profissao = Profissao::where('nome', $dado['nome'])->first();

            if (!$profissao) {
                Profissao::create($dado);
            }
        }
    }
}
