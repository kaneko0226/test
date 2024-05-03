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
<?php echo Auth::user(); ?>
<form method="post" action="../resource" enctype='multipart/form-data'>
    @csrf
    <div>
        <label>タイトル：</label>
        <input type="text" name="title" value="{{ old('title') }}">
        <!-- @if($errors->has('title'))
            <p>{{ $errors->first('title') }}</p>
            @endif -->
    </div>
    <div>
        <label>投稿内容：</label>
        <input type="text" name="comment" value="{{ old('comment') }}">
        <!-- @if($errors->has('comment'))
            <p>{{ $errors->first('comment') }}</p>
            @endif -->
    </div>
    <div>
        <label>画像投稿：</label>
        <input type="file" name="image">
    </div>

    <button type="submit">登録</button>

</form>

@endsection