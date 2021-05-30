<?php

namespace App\Http\Controllers\Api;

use App\Bookable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\BookableReviewIndexResource;

class BookableReviewController extends Controller
{
    public function __invoke($id, Request $request)
    {
        $bookable = Bookable::findOrFail($id);

        return BookableReviewIndexResource::collection(
            $bookable->reviews()->latest()->get()
        );
    }
}

/**
         * 
         * "BookableReviewIndexResource" is a resource 
         * controller that encompasses the query builder.
         * This is the way to call the resource controller
         * and limit the information passed to views.
         * The result of the query will be embedded inside
         * another array in the name "data" for ease of 
         * pagination.
         * 
         * "reviews" refers to the relationship 
         * defined inside of the BOOKABLE model that states
         * a "hasMany" relationship. This way we can read
         * all the reviews associated under the BOOKABLE $id.
         *  
         * "latest()" is a query scope that will read 
         * all the newest results in the REVIEWS table.
         * 
         * "get()" is used actually to execute the query. 
         * 
         */
