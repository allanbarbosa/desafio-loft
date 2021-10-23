<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profissao extends Model
{
    use HasFactory;
    
    protected $table = 'profissao';

    public $timestamps = false;

    protected $fillable = [
        'nome', 'ponto_vida', 'forca',
        'destreza', 'inteligencia', 'modificador_ataque',
        'modificador_velocidade'
    ];

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'ponto_vida' => $this->ponto_vida,
            'forca' => $this->forca,
            'destreza' => $this->destreza,
            'inteligencia' => $this->inteligencia,
            'modificador_ataque' => $this->modificador_ataque,
            'modificador_velocidade' => $this->modificador_velocidade
        ];
    }
}
