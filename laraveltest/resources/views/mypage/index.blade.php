@extends('layouts.index')
@section('title','マイページ')

@section('index')
<h1>こんにちは{{$name}}です</h1>
<a href="/mypage/add">投稿する</a>
<table border=1>
    <tr>
        <th>userid</th>
        <th>コメント</th>
    </tr>
    @foreach($items as $item){
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->comment}}</td>
        </tr>
    @endforeach
    }
</table>
@endsection
