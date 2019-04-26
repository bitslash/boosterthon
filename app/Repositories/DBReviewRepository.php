<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Repositories\ReviewRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class DBReviewRepository implements ReviewRepositoryInterface
{
    protected $_model;

    /**
     * instantiate the object
     *
     * @param Review
     */
    public function __construct(Model $model)
    {
        $this->_model = $model;
    }

    /**
     * get a record with a specific identifier
     *
     * @param int
     *
     * @return Results
     */
    public function get($id)
    {
        $reviews = $this->_model::select('rating', 'reviewer_name', 'reviewer_email', 'created_at')
            ->where('fundraiser_id', '=', $id)
            ->get();

        return $reviews;
    }

    /**
     * get all records
     *
     * @return Results
     */
    public function all()
    {
        $reviews = $this->_model::select('fundraiser_id', 'fundraiser_name', DB::raw('AVG(rating) as average_rating'), DB::raw('COUNT(*) as num_rating'))
            ->join('fundraisers', 'fundraisers.id', '=', 'reviews.fundraiser_id')
            ->groupBy('fundraiser_id', 'fundraiser_name')
            ->get();

        return $reviews;
    }

    /**
     * save a request
     *
     * @return int
     */
    public function save(Request $request)
    {
        $request->validate([
            'reviewer_email' => 'required',
            'reviewer_name' => 'required'
        ]);
        $review = $this->_model::create($request->all());
        return $review->id;
    }
}
