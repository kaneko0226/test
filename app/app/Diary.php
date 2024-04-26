<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    protected $fillable = ['diary_id ', 'user_id', 'title', 'comment', 'pump', 'del_flg'];

    public $timestamps = false;
}
