@extends('layouts.layout')

@section('diary_cteate')



<!-- @if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif -->

<form action="/" method="post">
    @csrf

    <div>
        <label for="title">タイトル：</label>
        <input id="title" type="text" name="title" value="{{ old('title') }}">
        <!-- @if($errors->has('title'))
            <p>{{ $errors->first('title') }}</p>
            @endif -->
    </div>

    <div>
        <label for="comment">投稿内容：</label>
        <input id="comment" type="text" name="comment" value="{{ old('comment') }}">
        <!-- @if($errors->has('comment'))
            <p>{{ $errors->first('comment') }}</p>
            @endif -->
    </div>


    <div>
        <button type="submit" name="submitBtnVal">登録</button>
    </div>

</form>

@endsection