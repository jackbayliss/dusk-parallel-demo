<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AboutTest extends DuskTestCase
{
    public function test_about_page_loads(): void
    {
        file_put_contents(storage_path('about-token.txt'), $_ENV['TEST_TOKEN']);

        $this->browse(function (Browser $browser) {
            $browser->visit('/about')
                ->assertSee('About Page');
        });
    }
}
