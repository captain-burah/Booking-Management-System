<?php
use App\Bookable;
use App\Booking;
use Illuminate\Database\Seeder;

class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bookable::all()->each(function (Bookable $bookable)  //'each' is a laravel loop statement like 'for-each'
        {
            //-- now we loop thru all the bookable data --
            $booking = factory(Booking::class)->make();   //-- generate the BookingFactory and get the two variables 'from' & 'to" --
            $bookings = collect([$booking]);   //-- now put the two variables into an array --
            //-- the 'collect' creates an object. Laravel collection is not just an array bcz we cannot call
            //   a method on an array such as a 'push()' method --

            for ($i = 0; $i < random_int(1, 20); $i++)
            {
                $from = (clone $booking->to)->addDays(random_int(1, 14));
                //-- this variable will read the last value of 'to' inside the $bookings collection 
                //   to avoid overlapping of a new booking registration.
                //   And then it will add random amount of days into the new variable --

                $to = (clone $from)->addDays(random_int(0, 14));
                //-- this variable will read the last value of 'from' created above and then it will add 
                //   a random amount of days into the new variable --

                $booking = Booking::make(   
                    //-- this is the function assigned to a variable that will create a 
                    //   new booking while reading every single record of a bookable  and the if-statement --
                    [
                        'from' => $from,
                        'to' => $to
                    ]
                );

                $bookings->push($booking);
                //-- the collection '$bookings' will be pushed with newly defined variable called '$booking' 
                //   without deleting the old '$booking' variables inside. 
                //   This will not run the make() function. --
            }

            $bookable->bookings()->saveMany($bookings);
            //-- the '$bookings' collection is created so it will collect all the bookings to one place
            //   so we can save them all at once.
            //   $bookable is each record of bookable model 
            //   and the bookings() is the relation inside it
            //   and this relation to bookings() has 'saveMany()' 
            //   to which we can pass the $bookings collection. --
        });
    }
}
