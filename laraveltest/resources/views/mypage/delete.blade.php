@extends('layouts.index')

@section('index')
    <a href="/mypage">戻る</a>
    <table>
        <form action="/mypage/delete" method="post">
            @csrf
            @if ($errors->has('comment'))
            <tr>
                <th>エラー：</th>
                <td>{{$errors->first('comment')}}</td>
            </tr>
            @endif
            @foreach($items as $item)
            <tr>
                <th>comment</th>
                <input type="hidden" name="id" value="{{$item->id}}">
                <td><input type="text" name="comment" value="{{$item->comment}}" readonly></td>
            </tr>
            @endforeach
            <tr>
                <th></th>
                <td><input type="submit" value="削除"></td>
            </tr>
        </form>
    </table>
@endsection