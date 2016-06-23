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
     * Create a new user instance.
     *
     * @param  Request  $request
     * @return Response
     */

    public function store(Request $request)
    {
        $validator = Validator::make ([
        'name' => 'required',
        'password' => 'required|min:8',
        ]);

        if ($validator) {
            $user = new User;

            $user->name = $request->name;
            $user->password = $request->password;

            $user->save();  
        }
        else {
            echo "Wrong input!";
        }
        
    }

    // Each user can have many orders.
    public function orders() {
        return $this->hasMany('order');
    }
}
