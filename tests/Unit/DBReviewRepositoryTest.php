<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Mockery;

class TestDBReviewRepository extends TestCase
{
    /**
     * test the review get method
     *
     * @return void
     */
    public function testReviewGet()
    {
        $id = 1;

        $results = new \StdClass;

        $model = Mockery::mock('App\Review');
        $model->shouldReceive('select')->andReturn($model);
        $model->shouldReceive('where')->with('fundraiser_id', '=', $id)->andReturn($model);
        $model->shouldReceive('get')->andReturn($results);

        $repository = new \App\Repositories\DBReviewRepository($model);
        $results = $repository->get($id);

        $this->assertInstanceOf('StdClass', $results);
    }

    /**
     * test the review all method
     *
     * @return void
     */
    public function testReviewAll()
    {
        $id = 1;

        $results = new \StdClass;

        $model = Mockery::mock('App\Review');
        $model->shouldReceive('select')->andReturn($model);
        $model->shouldReceive('join')->andReturn($model);
        $model->shouldReceive('groupBy')->andReturn($model);
        $model->shouldReceive('orderBy')->andReturn($model);
        $model->shouldReceive('get')->andReturns($results);

        $repository = new \App\Repositories\DBReviewRepository($model);
        $results = $repository->all();

        $this->assertInstanceOf('StdClass', $results);
    }
}
