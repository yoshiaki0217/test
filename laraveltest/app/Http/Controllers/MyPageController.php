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

}
