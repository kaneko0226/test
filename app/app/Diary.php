<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    protected $fillable = ['diary_id ', 'user_id', 'title', 'comment', 'pump', 'del_flg'];

    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }
    //後でViewで使う、いいねされているかを判定するメソッド。
    public function isLikedBy($user): bool
    {
        return Like::where('user_id', $user->id)->where('diary_id', $this->id)->first() !== null;
    }
}
