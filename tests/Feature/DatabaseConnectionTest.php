<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class DatabaseConnectionTest extends TestCase
{
    public function test_database_connection_is_working(): void
    {
        $result = DB::select('SELECT 1 AS resultado');

        $this->assertEquals(
            1,
            $result[0]->resultado
        );
    }
}