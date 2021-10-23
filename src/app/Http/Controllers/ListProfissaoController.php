<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repositories\ProfissaoRepositorio;

class ListProfissaoController extends Controller
{
    public function __invoke()
    {
        return response()->json(ProfissaoRepositorio::getListProfissao(), 200);
    }
}