<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RateTest extends TestCase
{
    /**
     * test that the rate page returns the correct status
     *
     * @return void
     */
    public function testRatePageStatus()
    {
        $response = $this->get('rate');

        $response->assertStatus(200);
    }
}
