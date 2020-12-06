<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentValidate;

class MyPageController extends Controller
{
    public function mypage(Request $request)
    {
        $name = Auth::user()->name;
        $items = DB::table('comment')
        ->join('users', 'users.id', '=', 'comment.user_id')
        ->select('users.name', 'comment.user_id', 'comment.id', 'comment.comment')
        ->get();

        return view('mypage.index', ['name' => $name, 'items' => $items]);
    }

    public function add(Request $request)
    {
        return view('mypage.add');
    }

    public function create(CommentValidate $request)
    {
        $comment = [
            'user_id' => Auth::id(),
            'comment' => $request->comment,
        ];
        DB::table('comment')->insert($comment);
        return redirect('/mypage');
    }

    public function edit(Request $request)
    {
        $items = DB::table('comment')
        ->where('comment.id', $request->id)
        ->get();
        
        return view('mypage.edit', ['items' => $items]);
    }

    public function update(CommentValidate $request)
    {
        $param = [
            'comment' =>$request->comment,
        ];
        DB::table('comment')
        ->where('id', $request->id)
        ->update($param);
        return redirect('/mypage');
    }

    public function delete(Request $request)
    {
        $items = DB::table('comment')
        ->where('comment.id', $request->id)
        ->get();
        
        return view('mypage.delete', ['items' => $items]);
    }

    public function remove(Request $request)
    {
        DB::table('comment')
        ->where('id', $request->id)
        ->delete();

        return redirect('/mypage');
    }
}
