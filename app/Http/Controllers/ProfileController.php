<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profile;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        
        if ($cond_title != '') {
            // 検索されたら検索結果を取得する
            $posts = Profile::where('name', $cond_title)->get();
        } else {
            // それ以外はすべてのニュースを取得する
            $posts = Profile::all();
        }
        
        return view('profile.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
}
