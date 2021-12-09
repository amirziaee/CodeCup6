<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class QPediaSampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_tables()
    {
        $this->assertTrue(Schema::hasTable('users'));
        $this->assertTrue(Schema::hasTable('posts'));
        $this->assertTrue(Schema::hasTable('edits'));
        $this->assertTrue(Schema::hasTable('edit_post'));
        $this->assertTrue(Schema::hasColumns('posts', ['user_id', 'title', 'body', 'created_by', 'updated_by']));
        $this->assertTrue(Schema::hasColumns('edits', ['user_id', 'change', 'value']));
        $this->assertTrue(Schema::hasColumns('edit_post', ['edit_id', 'post_id']));
    }
}
