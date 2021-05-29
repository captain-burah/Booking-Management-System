<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    /** 
     * 
     *   So now we have to tell LARAVEL  what are the relationships we have
     *   between the REVIEW, BOOKING and BOOKABLE.
     * 
     */
    public function bookable()
    {
        return $this->belongsTo(Bookable::class);
        /**
         * 
         *   This "::" double colon is a static accessor, which means your not
         *   really accessing a constant bcz the "class" is a constant in this 
         *   context or your not accessing the instance of the "Bookable" class,
         *   but your are accessing the class itself.
         *
         *   In simple, this is when you want to access something globally
         *   from this class. This will return the namespace together with 
         *   the class name.
         * 
         */
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }



    /*
        The Review model will need alot of changes bcz of the new UUID field.

        So first we have to tell laravel that this model no longer will be 
        using our primary key, that is auto incrementing. 
        This method "getIncrement()" is a public method defined
        inside the base model class.
        
        Therefore we return FALSE here to tell laravel 
        it is not auto incrementing.
    */
    public function getIncrement()
    {
        return false;
    }

    /*
        Next what we shud do is redefine or override what is 
        professionally known as "getKeyType()" method. This is basically
        asking the data type of the primary key that will be returned.
    
        Normally this would be an INTEGER if the "id" would be "BigInteger"
        which is "auto incrementing" by LARAVEL's default settings, 
        but since we have a "uuid" this is now become a "string" data type.
    */
    public function getKeyType()
    {
        return 'string';
    }


}
