<?php

namespace App;

use App\Models\Country;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subscription;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

	protected $fillable = [
		'name',
		'email',
		'email_verified_at',
		'password',
		'remember_token',
        'office_number',
        'company_name',
        'mobile_number',
        'address',
        'country_id'
	];

	public function country(){
	    return $this->hasOne(Country::class);
    }
    
    public function subscription(){
        $this->hasOne(Subscription::class);
    }
}
