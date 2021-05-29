<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookable extends Model
{
    
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }



    /**
     * 
     * The below function will call the Bookings() function 
     * within the same model to state the relationship of the 
     * Booking model and then it will call the specific function 
     * called betweenDates() inside the Booking model passing the 
     * attributes of $from and $to and calling a count() function 
     * to read the number of outputs returned back.
     *
     */

    public function availableFor($from, $to): bool
    {
        return 0 === $this->bookings()->betweenDates($from, $to)->count();
    }
}
