<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UsuarioTableTest extends TestCase
{
    use RefreshDatabase;

    public function test_migrations_run_successfully(): void
    {
        $this->assertTrue(true);
    }
}