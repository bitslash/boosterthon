<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Repositories\ReviewRepositoryInterface;
use App\Repositories\FundraiserRepositoryInterface;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    /**
     * @var ReviewRepositoryInterface
     */
    protected $_review;

    /**
     * @var FundraiserRepositoryInterface
     */
    protected $_fundraiser;

    /**
     * get the repository data model for review
     *
     * @param ReviewRepositoryInterface
     */
    public function __construct(ReviewRepositoryInterface $review, FundraiserRepositoryInterface $fundraiser)
    {
        $this->_review = $review;
        $this->_fundraiser = $fundraiser;
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
        return view('pages/rate', ['fundraiser_name' => '']);
    }

    /**
     * rate a specific fundraiser
     *
     * @param int
     *
     * @return Response
     */
    public function ratespecific(int $fundraiser_id)
    {
        $fundraiser_name = $this->_fundraiser->getName($fundraiser_id);
        return view('pages/rate', ['fundraiser_name' => $fundraiser_name]);
    }

    /**
     * list a fundraiser's ratings
     *
     * @return Response
     */
    public function list(int $fundraiser_id)
    {
        $fundraiser_name = $this->_fundraiser->getName($fundraiser_id);
        $reviews = $this->_review->get($fundraiser_id);
        return view('pages/list', ['fundraiser_name' => $fundraiser_name, 'reviews' => $reviews]);
    }

    /**
     * save a fundraiser's rating
     *
     * @return Response
     */
    public function save(Request $request)
    {
        $id = $this->_fundraiser->save($request);

        // temporary until we can autopopulate the rating
        $request->merge(['fundraiser_id' => $id, 'rating' => '5']);

        $this->_review->save($request);
        return redirect('list/' . $id);
    }
}
