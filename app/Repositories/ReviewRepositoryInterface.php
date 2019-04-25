<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

interface ReviewRepositoryInterface
{
    /**
     * instantiate the object
     *
     * @param Model
     */
    public function __construct(Model $model);

    /**
     * get a record with a specific identifier
     *
     * @param int
     *
     * @return Results
     */
    public function get(int $id);

    /**
     * get all records
     *
     * @return Results
     */
    public function all();

    /**
     * save a request
     *
     * @return int
     */
    public function save(Request $request);
}
