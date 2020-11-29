<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPageController extends Controller
{
    public function mypage(Request $request)
    {
        return view('mypage.index');
    }
}
