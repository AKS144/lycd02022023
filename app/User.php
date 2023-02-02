<?php

namespace App;


use App\Role;
use App\Wishlist;
use App\Profile;
use Carbon\Carbon;
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use SoftDeletes, Notifiable, HasApiTokens;

    public $table = 'users';

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
    ];

    protected $fillable = [
        'name',
        'email',
        'password',
        'created_at',
        'updated_at',
        'deleted_at',
        'remember_token',
        'email_verified_at',
    ];

    protected $dateFormats = [
        'exp_date'     => 'd-m-Y',
        'suspend_date' => 'd-m-Y',
        'notify_date'  => 'd-m-Y',
        'updated_at'   => 'd-m-Y',
        'created_at'   => 'd-m-Y',
        'deleted_at'   => 'd-m-Y',
    ];


    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }


    // protected function asDateTime($value)
    // {
    //     return parent::asDateTime($value)->format('d/m/y');
    // }

    public function profile()
    {
        return $this->hasOne(Profile::class,'userid','id');
    }

    public function setDateAttribute($value) 
    {
        $this->attributes['date'] = (new Carbon($value))->format('d/m/y');
    }

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function getEmailVerifiedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setEmailVerifiedAtAttribute($value)
    {
        $this->attributes['email_verified_at'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function setPasswordAttribute($input)
    {
        if ($input) {
            $this->attributes['password'] = app('hash')->needsRehash($input) ? Hash::make($input) : $input;
        }
    }

    //for admin role middleware
    public function getIsAdminAttribute()
    {
        return $this->roles()->where('id', 1)->exists();
    }

    //for artist role middleware
    public function getIsArtistAttribute()
    {
        return $this->roles()->where('id', 2)->exists();
    }

    //for client role middleware
    public function getIsClientAttribute()
    {
        return $this->roles()->where('id', 3)->exists();
    }

    //for expert role middleware
    public function getIsExpertAttribute()
    {
        return $this->roles()->where('id', 4)->exists();
    }

    
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }
}
