<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bookable;

class BookableAvailabilityController extends Controller
{
    /**
     * 
     * It is a controller that will serve only one purpose or function.
     * 
     * This will check whether the bookables are available or not by
     * calling the 'availableFor' function from the Bookable model
     * from where again the Booking Model will be called 
     * to state its relationship between the Bookable model 
     * and the Booking model.
     *
     */
    public function __invoke($id, Request $request)
    {

        $data = $request->validate([
            'from' => 'required|date_format:Y-m-d|after_or_equal:now',
            'to' => 'required|date_format:Y-m-d|after_or_equal:from'
        ]);

        $bookable = Bookable::findOrFail($id);
        
        return $bookable->availableFor($data['from'], $data['to']) 

            ? response()->json([])   
            //-- This will return an empty array if the function returns TRUE
            
            : response()->json([], 404);  
            //-- This will return empty array along with 404 error code if the function returns FALSE



    }
}
