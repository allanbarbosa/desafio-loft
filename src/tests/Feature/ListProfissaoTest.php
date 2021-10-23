<?php
declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Profissao;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ListProfissaoTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
    }

    public function test_list_no_profissao()
    {
        $response = $this->get('/api/profissoes');

        $response->assertStatus(200);
        $response->assertJsonCount(0);
    }

    public function test_list_profissao()
    {
        Profissao::factory()->create();

        $response = $this->get('/api/profissoes');
        
        $response->assertStatus(200);
        $response->assertJsonCount(1);
        $response->assertJsonStructure([
            ['nome', 'ponto_vida', 'id', 'forca', 'destreza', 'intelifencia', 'modificador_ataque', 'modificador_velocidade']
        ]);
    }
}
