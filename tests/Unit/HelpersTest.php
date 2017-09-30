<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HelpersTest extends TestCase
{
    /** @test */
    public function page_title_should_return_the_base_title_if_the_title_is_empty()
    {
        $this->assertEquals(config('app.name').'- List of Artisans',page_title(''));
    }

    /** @test */
    public function page_title_should_return_the_correct_if_the_title_is_provided()
    {
        $this->assertEquals('Home |'.config('app.name').'- List of Artisans',page_title('Home |'));
        $this->assertEquals('About |'.config('app.name').'- List of Artisans',page_title('About |'));
        $this->assertEquals('Artisans |'.config('app.name').'- List of Artisans',page_title('Artisans |'));
        $this->assertEquals('Contact |'.config('app.name').'- List of Artisans',page_title('Contact |'));
    }
}
