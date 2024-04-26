<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['name', 'bmi', 'height', 'weight', 'month_goal', 'last_goal', 'del_flg'];

    public $timestamps = false;
}
