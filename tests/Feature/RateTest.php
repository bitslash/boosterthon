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

    /**
     * test that a post results in a redirect
     *
     * @return void
     */
    public function testRatePost()
    {
        $post = [
            'rating' => 5,
            'fundraiser_name' => 'InfoMart',
            'reviewer_name' => 'James Watkins',
            'reviewer_email' => 'james@bitslash.com'
        ];
        $response = $this->post('/rate', $post);

        $response->assertStatus(302);
    }
}
