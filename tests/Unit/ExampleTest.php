<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testNewUserRegistration()
    {
        $this->browse(function ($browser) {
            $browser->visit('/register')->type('Taylor', 'name')->check('terms')->press('Register')->seePageIs('/home');
        });
    }
}
