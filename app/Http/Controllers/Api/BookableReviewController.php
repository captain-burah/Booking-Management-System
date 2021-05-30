<?php

namespace App\Http\Controllers\Api;

use App\Bookable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookableReviewController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id, Request $request)
    {
        $bookable = Bookable::findOrFail($id);
        
        return $bookable->reviews()->latest()->get();
        /**
         * 
         * "reviews" refers to the relationship 
         * defined inside of the BOOKABLE model that states
         * a "hasMany" relationship. This way we can read
         * all the reviews associated under the BOOKABLE $id.
         *  
         * "latest()" is a query builder that will read 
         * all the newest results in the REVIEWS table.
         * 
         * "get()" is used actually to execute the query. 
         * 
         */
    }
}
