<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Nicolaslopezj\Searchable\SearchableTrait;
class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;
    use SearchableTrait;
    public $searchable = [
        'columns' => [
            'users.name' => 100,
            'users.email' => 100,
        ],
    ];	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = ['name', 'email', 'password','avatar_url']; #### array of fields can change by users

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	    public function role_user()
    {
        return $this->belongsTo('App\role_user');
    }
    public function role()
    {
        return $this->hasMany('App\role_user');
    }
#####relation#####	
}
