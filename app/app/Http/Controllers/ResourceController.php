<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diary;
use App\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ResourceController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $review = Diary::withCount('likes')->orderBy('id', 'desc')->paginate(10);
        // dd($review);
        // // $param = [
        // //     'reviews' => $review,
        // // ];


        $profile = new Profile;
        $diary = new Diary;
        $user_id = Auth::user()->id;
        $role = Auth::user()->role;

        $profileall = $profile->all()->where('profiles_id', '=', $user_id);
        $diaryall = $diary->all()->where('user_id', '=', $user_id);

        return view('home', [
            'profiles' => $profileall,
            'diaries' => $diaryall,
            // $param
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diary_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Log::debug('testtesttesttesttesttesttest');

        $diary = new Diary;
        $user_id = Auth::user()->id;
        $diary->user_id = $user_id;
        $diary->title = $request->title;
        $diary->comment = $request->comment;
        $diary->image = $request->image;
        // dd($diary);

        // 画像投稿ない場合
        if (!empty($request->image)) {
            $image_path = $request->file('image')->store('public/images');
            $diary->image = basename($image_path);
        }
        // // var_dump($diary->toarray());
        $diary->save();
        return redirect('/resource');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // echo "editeditediteditediteditedit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { }
}
