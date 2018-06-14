<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\UserDetail
 *
 * @mixin \Eloquent
 */
class UserDetail extends Model
{
    protected $fillable = ['user_id','age','address'];
}
