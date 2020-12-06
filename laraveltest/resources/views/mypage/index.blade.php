@extends('layouts.index')
@section('title','マイページ')

@section('index')
<h1>こんにちは{{$name}}です</h1>
<a href="/mypage/add">投稿する</a>
<table border=1>
  <tr>
    <th>userid</th>
    <th>コメント</th>
    <th></th>
    <th></th>
  </tr>
  @foreach($items as $item)
  <tr>
    <td>{{$item->name}}</td>
    <td>{{$item->comment}}</td>
    @if(Auth::user()->id == $item->user_id)
        <td>
        <form action="mypage/edit" method="get">
        @csrf
            <input type="hidden" name="id" value="{{$item->id}}">
            <input type="submit" value="変更">
        </form>
        </td>

        <td>
        <form action="mypage/delete" method="get">
        @csrf
            <input type="hidden" name="id" value="{{$item->id}}">
            <input type="submit" value="削除">
        </form>
        </td>
        
    @else
        <td></td>
        <td></td>
    @endif
  </tr>
  @endforeach
</table>
@endsection
