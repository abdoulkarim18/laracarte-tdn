<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class helpersTest extends TestCase
{
    /** @test */
    public function page_title_should_return_the_base_title_if_title_is_empty()
    {
        dd(page_title(''));
        $this->assertEquals('Laracarte - List of artisans', page_title(''));
    }
    /** @test */
    public function page_title_should_return_the_correct_title_if_title_is_provided()
    {
        $this->assertEquals('About | Laracarte - List of artisans', page_title('About'));
        $this->assertEquals('Home | Laracarte - List of artisans', page_title('Home'));
    }
}
