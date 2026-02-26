<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

// Not truly required, but proves paratest split them. and this isnt crazy.
class ParallelTest extends DuskTestCase
{
    public function test_tests_ran_in_separate_processes(): void
    {
        $homePid = file_get_contents(storage_path('home-pid.txt'));
        $aboutPid = file_get_contents(storage_path('about-pid.txt'));

        $this->assertNotSame($homePid, $aboutPid, 'Tests ran in the same process — parallelism is not working.');
    }
}
