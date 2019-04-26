<?php

namespace App\Http\Controllers;

use App\Repositories\FundraiserRepositoryInterface;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * @var FundraiserRepositoryInterface
     */
    protected $_fundraiser;

    /**
     * get the repository data model for fundraisers
     *
     * @param FundraiserRepositoryInterface
     */
    public function __construct(FundraiserRepositoryInterface $fundraiser)
    {
        $this->_fundraiser = $fundraiser;
    }

    /**
     * search for a fundraiser
     *
     * @return Response
     */
    public function autocomplete(Request $request)
    {
        $results = $this->_fundraiser->search($request);
        return response()->json($results);
    }
}
