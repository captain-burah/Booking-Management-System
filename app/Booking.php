<?php

namespace App;

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
}
