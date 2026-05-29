<?php

namespace Tests\Unit;

use App\Models\Usuario;
use Tests\TestCase;

class UsuarioModelTest extends TestCase
{
    public function test_usuario_model_uses_correct_table(): void
    {
        $usuario = new Usuario();

        $this->assertEquals(
            'Usuario',
            $usuario->getTable()
        );
    }
}