@extends('layouts.index')

@section('index')
    <a href="/mypage">戻る</a>
    <table>
        <form action="/mypage/add" method="post">
            @csrf
            @if ($errors->has('comment'))
            <tr>
                <th>エラー：</th>
                <td>{{$errors->first('comment')}}</td>
            </tr>
            @endif
            <tr>
                <th>comment</th>
                <td><input type="text" name="comment" value="{{old('comment')}}"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="send"></td>
            </tr>
        </form>
    </table>
@endsection
