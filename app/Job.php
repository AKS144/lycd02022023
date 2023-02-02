<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Nicolaslopezj\Searchable\SearchableTrait;


class Job extends Model
{
    //use SoftDeletes;
    use SearchableTrait;


    public $table = 'jobs';

    protected $dates = [
        'created_at',
        'updated_at',
        //'deleted_at',
    ];

    protected $fillable = [
        'title',
        'salary',
        'address',     
        'company',      
        'location_id',
        'name',
        'requirements',
        'description',      
    ];

    protected $searchable = [
        'columns' => [
            'jobs.name' => 10,
            'jobs.jobtype' => 5,
            'jobs.location' => 5,
            'jobs.price_type' => 10,
            'jobs.budget' => 10,
            'jobs.requirements' => 10,
            'jobs.address' => 10,
            'jobs.user_name' => 10,   
            'categories.name'  => 10,
            'locations.name' => 10,
        ],
        'joins' => [            
            'categories'  =>  ['categories.id','jobs.category_id'],
            'locations' => ['locations.id','jobs.location_id'],
        ],
        'groupBy'=>'jobs.id'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function location()
    {
        return $this->belongsTo(City::class, 'location_id');
    }

    // public function categories()
    // {
    //     return $this->belongsToMany(Category::class);
    // }

    public function categories()
    {
        return $this->belongsTo(Category::class,'category_id');
    }


    //temporarly not in use as ajax and laravel composer package fulltext search implemented above is used 
    public function scopeSearchResults($query)
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
        ->when(!empty(request()->input('search', '')), function($query) {
            $query->where(function($query) {
                $search = request()->input('search');
                $query->where('name', 'LIKE', "%$search%")                   
                    ->orWhere('description', 'LIKE', "%$search%")               
                    ->orWhere('requirements', 'LIKE', "%$search%")
                    ->orWhere('address', 'LIKE', "%$search%")
                    ->orWhereHas('location', function($query) use($search){
                        $query->where('name','LIKE', "%$search%");
                    })
                    ->orWhereHas('categories', function($query) use($search){
                        $query->where('name','LIKE', "%$search%");  
                });                
            });
        });
    }
}
