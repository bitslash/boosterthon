<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ReviewsController extends Controller
{
    /**
     * retrieve the default view with review data
     *
     * @return Response
     */
    public function index()
    {
        $reviews = DB::table('reviews')
            ->select('fundraiser_id', 'fundraiser_name', DB::raw('AVG(rating) as average_rating'), DB::raw('COUNT(*) as num_rating'))
            ->join('fundraisers', 'fundraisers.id', '=', 'reviews.fundraiser_id')
            ->groupBy('fundraiser_id', 'fundraiser_name')
            ->get();
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

        $reviews = DB::table('reviews')
            ->select('rating', 'reviewer_name', 'reviewer_email', 'date')
            ->where('fundraiser_id', '=', $fundraiser_id)
            ->get();
        return view('pages/list', ['reviews' => $reviews, 'fundraiser_name' => $fundraiser_name]);
    }
}
