<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class Enquiry extends Model

{
	protected $table ='enquiry';
	public $timestamps = false;

	protected $fillable = [

		'name',

		'email',

		'phone',

		'description'

	];

    

}

