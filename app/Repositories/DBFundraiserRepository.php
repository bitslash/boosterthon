<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Repositories\FundraiserRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class DBFundraiserRepository implements FundraiserRepositoryInterface
{
    protected $_model;

    /**
     * instantiate the object
     *
     * @param Fundraiser
     */
    public function __construct(Model $model)
    {
        $this->_model = $model;
    }

    /**
     * get all records
     *
     * @param int
     *
     * @return string
     */
    public function getName(int $id)
    {
        $fundraiser = $this->_model::select('fundraiser_name')
            ->where('id', '=', $id)
            ->get();

        $fundraiser_name = '';
        if (!$fundraiser->isEmpty())
        {
            $fundraiser_name = $fundraiser->first()->fundraiser_name;
        }

        return $fundraiser_name;
    }

    /**
     * save a request
     *
     * @return int
     */
    public function save(Request $request)
    {
        $name = $request->fundraiser_name;
        $fundraiser = $this->_model::firstOrCreate(['fundraiser_name' => $name]);
        return $fundraiser->id;
    }
}
