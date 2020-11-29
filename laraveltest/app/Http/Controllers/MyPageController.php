<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyPageController extends Controller
{
    public function mypage(Request $request)
    {
        $name = Auth::user()->name;
        return view('mypage.index', ['name' => $name]);
    }

    public function add(Request $request)
    {
        return view('mypage.add');
    }

    public function create(Request $request)
    {
        $comment = [
            'user_id' => Auth::id(),
            'comment' => $request->comment,
        ];
        DB::table('comment')->insert($comment);
        return redirect('/mypage');
    }
}
