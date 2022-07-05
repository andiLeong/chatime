<?php

namespace Tests\Feature;

use App\Models\Promotion;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;
use Tests\TestCase;

class ReadPromotionTest extends TestCase
{
    use LazilyRefreshDatabase;

    /** @test */
    public function it_can_read_promotions()
    {
        $this->withoutExceptionHandling();
        $promotions = Promotion::factory(10)->create();
        $response = $this->get('/promotion');
        $response->assertSee($promotions[0]['name'],$promotions[1]['name']);
    }
}
