<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'name','avatar', 'email', 'password','role'
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


    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }

    public function getAvatarAttribute($value){
        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }
        return asset('storage/' . $value);
    }


    public function posts(){
        return $this->hasMany(Post::class);
    }
    public function AdminPost(){
        return $this->hasMany(Admin::class);
    }
    public function permissions(){

        return $this->belongsToMany(Permission::class);

    }

    public function roles(){

        return $this->belongsToMany(Role::class);

    }

    public function userHasRole($role_name){
        foreach($this->roles as $role){
            if(Str::lower($role_name) == Str::lower($role->name))
                return true;
        }

        return false;
    }

    /*For Display in Form*/
    public static $access = [
        self::Access_Admin => 'Admin',
        self::Access_user => 'User',
    ];

    /*For Entry in Database*/
    const Access_Admin = 'admin';
    const Access_user = 'user';
}