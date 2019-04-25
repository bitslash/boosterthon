<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomeTest extends TestCase
{
    /**
     * test that the home page returns the correct status
     *
     * @return void
     */
    public function testHomePageStatus()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * test that the fundraiser link for an existing fundraiser
     * returns the correct status
     *
     * @return void
     */
    public function testHomePageListExistant()
    {
        $response = $this->get('/list/1');

        $response->assertStatus(200);
    }

    /**
     * test that the fundraiser link for non-existant fundraiser
     * returns the correct status
     *
     * @return void
     */
    public function testHomePageListNonExistant()
    {
        $response = $this->get('/list/100');

        $response->assertStatus(200);
    }
}
