<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     #commenting this part out Adityak
    /*protected $fillable = [
        'name', 'email', 'password',
    ];*/

    protected $fillable = [
        'first_name', 'last_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function incomplete_task() {
        return $this->hasMany('\App\Incomplete_task');
    }

    public function complete_task() {
        return $this->hasMany('\App\Complete_task');
    }
}
