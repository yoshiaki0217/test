@extends('layouts.index')

@section('index')
    <a href="/mypage">戻る</a>
    <form action="/mypage/add" method="post">
        @csrf
        <input type="text" name="comment">
        <input type="submit" value="send">
    </form>
@endsection
