<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Models\Profissao;

class ProfissaoRepositorio
{
    public static function getListProfissao(): array
    {
        return Profissao::all()->toArray();
    }
}
