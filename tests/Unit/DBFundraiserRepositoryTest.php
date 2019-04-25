<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Mockery;

class DBFundraiserRepositoryTest extends TestCase
{
    /**
     * test retrieving the name of a specific fundraiser
     *
     * @return void
     */
    public function testGetFundraiserName()
    {
        $id = 1;

        $fundraiser = new \StdClass;
        $fundraiser->fundraiser_name = 'Test Case';

        $results = Mockery::mock('Illuminate\Database\Eloquent\Collection');
        $results->shouldReceive('isEmpty')->andReturn(false);
        $results->shouldReceive('first')->andReturn($fundraiser);

        $model = Mockery::mock('App\Fundraiser');
        $model->shouldReceive('select')->andReturn($model);
        $model->shouldReceive('where')->with('id', '=', $id)->andReturns($model);
        $model->shouldReceive('get')->andReturns($results);

        $repository = new \App\Repositories\DBFundraiserRepository($model);
        $name = $repository->getName($id);

        $this->assertSame('Test Case', $name);
    }

    /**
     * test no results when retrieving a fundraiser name
     *
     * @return void
     */
    public function testGetFundraiserNameNoResults()
    {
        $id = 100;

        $results = Mockery::mock('Illuminate\Database\Eloquent\Collection');
        $results->shouldReceive('isEmpty')->andReturn(true);

        $model = Mockery::mock('App\Fundraiser');
        $model->shouldReceive('select')->andReturn($model);
        $model->shouldReceive('where')->with('id', '=', $id)->andReturns($model);
        $model->shouldReceive('get')->andReturns($results);

        $repository = new \App\Repositories\DBFundraiserRepository($model);
        $name = $repository->getName($id);

        $this->assertSame('', $name);
    }
}
