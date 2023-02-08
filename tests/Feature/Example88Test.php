<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class Example88Test extends TestCase
{
    use RefreshDatabase {migrateUsing as traitMigrateUsing;}

    protected function migrateUsing()
    {
        return [
            '--seed' => $this->shouldSeed(),
            '--seeder' => $this->seeder(),
        ];
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $this->assertTrue(true);
    }
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response2()
    {
        $this->assertTrue(true);
    }
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response3()
    {
        $this->assertTrue(true);
    }
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response4()
    {
        $this->assertTrue(true);
    }
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response5()
    {
        $this->assertTrue(true);
    }
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response6()
    {
        $this->assertTrue(true);
    }
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response7()
    {
        $this->assertTrue(true);
    }
}
