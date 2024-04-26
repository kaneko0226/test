@extends('layouts.layout')

@section('home')


<div class="profiles">
    @foreach($profiles as $profile)

    @if(isset($profile['name']))
    <div class="greeting">
        <span>ようこそ[</span>
        <tr>
            <th>{{ $profile['name'] }}</th>
        </tr>
        <span>]さん</span>
    </div>
    @endif
    @endforeach

    <div class="diary_create">
        <a href="/create">日記を書く</a>
    </div>
    <div class="diary_edit">
        <a href="/home">日記一覧</a>
    </div>

    <div class="diary_search">
        <form action="" method="POST">
            <label>日付検索</label>
            <input type="date" name="from">
            <span class="mx-3">~</span>
            <input type="date" name="until">

            <label>パンプ</label>
            <input type="number" name="pump">
            <button type="submit">検索画面へ</button>
        </form>
    </div>


    @foreach($diaries as $diary)
    <div class="col-12 ">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>日記詳細</th>
                    <th>タイトル</th>
                    <th>日付</th>
                    <th>画像</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td><a href="{{ route('diary_edit',['id' => $diary['diary_id']]) }}">#</a></td>
                    <td>{{ $diary['title'] }}</td>
                    <td>{{ $diary['created_at'] }}</td>
                    <td>{{ $diary['image'] }}</td>
                    <td> <img src="{{ asset('/public/storage/' . $diary->file_path) }}" /></td>
                    <button onclick="">いいね</button>
                </tr>
            </tbody>
        </table>
    </div>
    @endforeach








</div>




@endsection