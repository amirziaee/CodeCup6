<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class CodeCupConnectionSampleTest extends TestCase
{
    public function test_codecup_connection()
    {
        $this->assertEquals(
            database_path('codecup.sqlite'),
            DB::connection('codecup')->getDatabaseName()
        );
    }

    public function test_codecup_test_connection()
    {
        $this->assertEquals(
            database_path('codecup_test.sqlite'),
            DB::connection('codecup_test')->getDatabaseName()
        );
    }
}
