<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class HomeTest extends DuskTestCase
{
    public function test_home_page_loads(): void
    {
        file_put_contents(storage_path('home-token.txt'), $_ENV['TEST_TOKEN']);

        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Hello World');
        });
    }
}
