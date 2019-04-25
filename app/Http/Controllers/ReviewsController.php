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
            ->select('fundraiser_id', 'fundraiser_name', DB::raw('AVG(rating) as average_rating'))
            ->join('fundraisers', 'fundraisers.id', '=', 'reviews.fundraiser_id')
            ->groupBy('fundraiser_id', 'fundraiser_name')
            ->get();
        return view('pages/home', ['reviews' => $reviews]);
    }
}
