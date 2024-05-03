@extends('layouts.layout')

@section('home')
<?php echo Auth::user(); ?>

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
</div>

<div class="diary_create">
    <a href="resource/create">日記を書く</a>
</div>



<div class="diary_search">
    <form action="{{ route('postsearch') }}" method="POST">
        @csrf
        <label>日付検索</label>
        <input type="date" name="from">
        <span class="mx-3">~</span>
        <input type="date" name="until">

        <label>パンプ</label>
        <input type="number" name="pump" value="<?php echo 0 ?>">
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
                <td> <img src="{{ asset('storage/images/' . $diary->image) }}" /></td>
                <button onclick="">いいね</button>
            </tr>
        </tbody>
    </table>

</div>
@endforeach

@endsection