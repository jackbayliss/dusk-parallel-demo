<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

// Not truly required, but proves paratest split them. and this isnt crazy.
class ParallelTest extends DuskTestCase
{
    public function test_tests_ran_in_separate_processes(): void
    {
        $homeToken = file_get_contents(storage_path('home-token.txt'));
        $aboutToken = file_get_contents(storage_path('about-token.txt'));

        $this->assertNotSame($homeToken, $aboutToken, 'Tests ran in the same worker.');
    }
}
