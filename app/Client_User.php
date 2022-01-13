<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;
use Hyn\Tenancy\Traits\UsesSystemConnection;



class Client_User extends Model
{
    use UsesSystemConnection;    

    protected $table = 'client__users';
    protected $fillable = ['host', 'name' ,'email' , 'password',];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
