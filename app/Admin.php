<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\AdminResetPasswordNotification;

class Admin extends Authenticatable
{
    use Notifiable;

    public function role()
    {
        return $this->belongsToMany(role::class,'role_admins');
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPasswordNotification($token));
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'gender',
        'username',
        'slug',
        'avatar',
        'coverpic',
        'about_user',
        'location_country',
        'location_state',
        'location_city',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


     public function getName() 
    {
        if ($this->firstname && $this->lastname) {
            return "{$this->firstname} {$this->lastname}";
        }
        if ($this->firstname) {
            return $this->firstname;
        }
        return null;
    }

    public function getNameOrUsername()
    {
        return $this->getName() ?: $this->username;
    }

    // get first- or username
    public function getFirstnameOrUsername()
    {
        return $this->firstname ?: $this->username;
    }

    
}
