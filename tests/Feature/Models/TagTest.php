<?php

namespace Tests\Feature\Models;

use App\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TagTest extends TestCase
{
    public function test_slug(): void
    {
        $tag = new Tag;
        $tag->name = 'Proyecto PHP';

        $this->assertEquals('proyecto-php', $tag->slug);
    }
}
