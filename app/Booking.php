<?php

namespace App;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
   protected $fillable = ['from', 'to'];
   //-- this is done to provide the capability of mass assignment of the 
   //   allowed fields  for security reasons --

   public function bookable()
   {
       return $this->belongsTo(Bookable::class);
   }

   /**
     * 
     * The below function is Builder function that refers to the 
     * database of the respective model only.
     * This builder function will run a query along with a where
     * clause in order to find overlapping between two date ranges.
     * This function returns TRUE if the dates overlap with the 
     * dates in the database table Booking.
     *
     */
    
   public function scopeBetweenDates(Builder $query, $from, $to)
   {
       return $query->where('to', '>=', $from)->where('from', '<=', $to); 
   }
}
