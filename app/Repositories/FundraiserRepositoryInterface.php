<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

interface FundraiserRepositoryInterface
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
    public function getName(int $id);

    /**
     * save a request
     *
     * @return int
     */
    public function save(Request $request);
}
