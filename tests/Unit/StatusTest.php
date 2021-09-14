<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Idea;
use App\Models\Status;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StatusTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function can_get_count_status()
    {
        $statusOpen = Status::factory()->create(['name' => 'Open']);
        $statusConsidering = Status::factory()->create(['name' => 'Considering']);
        $statusInProgress = Status::factory()->create(['name' => 'Considering']);
        $statusImplemented = Status::factory()->create(['name' => 'Implemented']);
        $statusClosed = Status::factory()->create(['name' => 'Closed']);

        Idea::factory()->count(5)->for($statusOpen)->create();
        Idea::factory()->count(4)->for($statusConsidering)->create();
        Idea::factory()->count(3)->for($statusInProgress)->create();
        Idea::factory()->count(2)->for($statusImplemented)->create();
        Idea::factory()->count(8)->for($statusClosed)->create();

        $this->assertEquals(22, Status::getCount()['all_statuses']);
        $this->assertEquals(5, Status::getCount()['open']);
        $this->assertEquals(4, Status::getCount()['considering']);
        $this->assertEquals(3, Status::getCount()['in_progress']);
        $this->assertEquals(2, Status::getCount()['implemented']);
        $this->assertEquals(8, Status::getCount()['closed']);
    }
}
