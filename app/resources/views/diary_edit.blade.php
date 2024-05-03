@extends('layouts.layout')

@section('diary_edit')

@foreach($diaries as $diary)
<div class="col-12 ">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>タイトル</th>
                <th>日付</th>
                <th>コメント</th>
                <th>パンプ</th>
                <th>画像</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>{{ $diary['title'] }}</td>
                <td>{{ $diary['created_at'] }}</td>
                <td>{{ $diary['comment'] }}</td>
                <td>{{ $diary['pump'] }}</td>
                <td>{{ $diary['image'] }}</td>
            </tr>
        </tbody>
    </table>
    {{ $diary['diary_id']}}
    <a href="/resource">ホーム画面に戻る</a>
    <a href="/diary_delete/{{$diary['diary_id']}}">削除</a>

</div>
@endforeach
@endsection