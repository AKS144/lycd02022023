<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;


class Profile extends Model
{
    use SearchableTrait;
    use HasFactory;
    

    public $table = 'profiles';

    protected $dates = [
        'created_at',
        'updated_at',
        //'deleted_at',
    ];

    protected $fillable = [
        'name',
        'location',
        'categories',
        'studio_address',
        'skills',
        'qualification',
        'verify'   
    ];

    protected $searchable = [
        'columns' => [
            'profiles.name' => 10,
            'profiles.gender' => 5,
            'profiles.location' => 5,
            'profiles.degree' => 10,
            'profiles.courses' => 10,
            'profiles.institute' => 10,
            'profiles.exp_yrs' => 10,
            'profiles.worked_loc' => 10,
            'profiles.state' => 10,
            'profiles.city' => 10,
            'profiles.skills' => 10,
            'profiles.zip' => 10,   
            'locations.name' => 10,
            'categories.name' => 10,       
        ],
        'joins' => [
            'category_profile' => ['category_profile.profile_id','profiles.id'],
            'categories'  =>  ['categories.id','category_profile.category_id'],
            'locations' => ['locations.id','profiles.location_id'],
        ],
        'groupBy'=>'profiles.id'
    ];

    

    public function location()
    {
        return $this->belongsTo(City::class,'location_id','id');
    }



    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
    /*public function items()
    {
        return $this->hasMany(Item::class,'profile_id','id');
    }*/

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function reviews()
    {
        return $this->hasMany(ReviewRating::class,'profile_id');
    }


    //temporarly not in use as ajax and fulltext search implemented 
  /*  public function scopeSearchResults($query)
    {
        return $query->when(!empty(request()->input('location', 0)), function($query) {
            $query->whereHas('location', function($query) {
                $query->whereId(request()->input('location'));
            });
        })
        ->when(!empty(request()->input('category', 0)), function($query) {
            $query->whereHas('categories', function($query) {
                $query->whereId(request()->input('category'));
            });
        })
        ->when(!empty(request()->input('profsearch', '')), function($query) {
            $query->where(function($query) {
                $search = request()->input('profsearch');
                $query->where('name', 'LIKE', '%'.$search.'%')                      
                      ->orWhere('skills', 'LIKE', "%$search%")   
                      ->orWhere('qualification', 'LIKE', "%$search%")
                      ->orWhere('studio_address', 'LIKE', "%$search%")
                      ->orWhere('studio', 'LIKE', "%$search%")
                      ->orWhere('course_name', 'LIKE', "%$search%")
                      ->orWhereHas('location', function($query) use($search){
                        $query->where('name','LIKE', "%$search%");
                      })                                                                            
                      ->orWhereHas('categories', function($query) use($search){
                          $query->where('name','LIKE', "%$search%");  });    
            });
        });
    } */
}
