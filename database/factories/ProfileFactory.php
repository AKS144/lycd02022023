<?php

namespace Database\Factories;
use App\Category;
use App\Profile;
use App\Location;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       /* return [
            
        ];*/

        $categories = Category::pluck('id');      
        $locations = Location::pluck('id');
        $faker = Faker\Factory::create();


        foreach(range(1, 7) as $id)
        {
            $profiles = new Profile;
            $profiles->name = $faker->unique()->name;
           // $profiles->short_description = $faker->sentence;
            $profiles->overview = $faker->paragraph;           
            $profiles->gender = "Male";    
            $profiles->id_type = "PAN";    
            $profiles->id_no = $faker->randomNumber($nbDigits = NULL, $strict = false);                      
            $profiles->location_id = $locations->random();
            if($profiles->location_id = $locations->random())         
            { 
                $loc = Location::where('id','=',$locations->random())->first(); 
                $profiles->location = $loc->name; 
                $profiles->latitude  = $loc->latitude;
                $profiles->longitude = $loc->longitude;
            }       
            $profiles->address = $faker->unique()->address;          
           // $profiles->top_rated = rand(0, 1);
            $profiles->profile_img = $faker->imageUrl($width = 200, $height = 200);
            $profiles->mobile = '+91'.$faker->phoneNumber;//Str::random(10);
            $profiles->skills = $faker->text;
            $profiles->courses = $faker->text;
            $profiles->user_id = '0';
            $profiles->verify = '0';
            $profiles->dob = '0';

            $profiles->degree = $faker->text;  
            $profiles->locality = $faker->streetAddress;
            $profiles->street = $faker->streetName;           
            $profiles->state = $faker->state;
            $profiles->city = $faker->city;     
            $profiles->zip = $faker->postcode;      
            $profiles->worked_loc = $faker->city;
            $profiles->exp_yrs = Str::random(2);
            $profiles->institute = $faker->text;           
            $profiles->acc_holder = $faker->name;
            $profiles->bank_name = $faker->text;
            $profiles->acc_no = $faker->phoneNumber;
            $profiles->ifsc = Str::random(2);
            $profiles->branch = $faker->name;
            $profiles->gst = $faker->numberBetween($min = 1000, $max = 9000);        
            $profiles->save();
            $profiles->categories()->sync($categories->random(rand(1,3)));
        }
    }
}
