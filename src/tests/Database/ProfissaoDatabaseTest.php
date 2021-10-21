<?php
declare(strict_types=1);

namespace Tests\Database;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class ProfissaoDatabaseTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
    }

    public function test_table_profissao_exists()
    {
        $this->assertTrue(Schema::hasTable('profissao'));
    }

    public function test_table_profissao_has_columns()
    {
        $this->assertTrue(Schema::hasColumns('profissao', [
            'nome',
            'ponto_vida',
            'forca',
            'destreza',
            'inteligencia',
            'modificador_ataque',
            'modificador_velocidade'
        ]));
    }
}
