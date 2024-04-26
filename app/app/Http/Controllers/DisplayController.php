<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Diary;
use App\User;

use Illuminate\Support\Facades\Auth;

class DisplayController extends Controller
{


    public function home()
    {
        $profile = new Profile;
        $diary = new Diary;
        $user_id = Auth::user()->id;

        $profileall = $profile->all()->where('profiles_id', '=', $user_id);
        $diaryall = $diary->all()->where('user_id', '=', $user_id);

        return view('home', [
            'profiles' => $profileall,
            'diaries' => $diaryall,
        ]);
    }


    public function diary_editing(int $id)
    {
        return view('diary_editing', [
            'id' => $id,
        ]);
    }

    public function diary_editing_go(int $id, Request $request)
    {
        $diary = new Diary;
        $diaries = $diary->where('diary_id', '=', "$id")->first();
        $diaries->title = $request->title;
        $diaries->comment = $request->comment;
        $diaries->image = $request->image;
        echo $diaries;

        // var_dump($diaries->toarray());
        // $diaries->save();
        // return view("diary_editing");
    }

    public function diary_delete(int $id)
    {
        $diary = new Diary;
        $diaries = $diary->where('diary_id', '=', $id);
        $diaries->delete();

        return redirect('/home');
        // echo $id;
        //     return view('diary_delete');
        // }
    }


    public function diary_edit(int $id)
    {
        $diary = new Diary;
        $diaryall = $diary->all()->where('diary_id', '=', $id);

        return view('diary_edit', [
            'diaries' => $diaryall,
        ]);
    }
}
