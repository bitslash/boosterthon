<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Repositories\ReviewRepositoryInterface;

class ReviewsController extends Controller
{
    /**
     * @var ReviewRepositoryInterface
     */
    protected $_review;

    /**
     * get the repository data model for review
     *
     * @param ReviewRepositoryInterface
     */
    public function __construct(ReviewRepositoryInterface $review)
    {
        $this->_review = $review;
    }

    /**
     * retrieve the default view with review data
     *
     * @return Response
     */
    public function index()
    {
        $reviews = $this->_review->all();

        return view('pages/home', ['reviews' => $reviews]);
    }

    /**
     * rate a fundraiser
     *
     * @return Response
     */
    public function rate()
    {
        return view('pages/rate');
    }

    /**
     * list a fundraiser's ratings
     *
     * @return Response
     */
    public function list(int $fundraiser_id)
    {
        $fundraiser = DB::table('fundraisers')
            ->select('fundraiser_name')
            ->where('id', '=', $fundraiser_id)
            ->get();

        $fundraiser_name = '';
        if (!$fundraiser->isEmpty())
        {
            $fundraiser_name = $fundraiser->first()->fundraiser_name;
        }

        $reviews = $this->_review->get($fundraiser_id);
        return view('pages/list', ['fundraiser_name' => $fundraiser_name, 'reviews' => $reviews]);
    }
}
