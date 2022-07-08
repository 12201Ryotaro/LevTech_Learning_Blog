<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Http\Requests\PostRequest;

class UserController extends Controller
{
    /**
    * Post一覧を表示する
    * 
    * @param Post Postモデル
    * @return array Postモデルリスト
    */
    public function index(User $user)
    {
        return view('User.index')->with(['own_posts' => $user->getOwnPaginateByLimit()]);
    }
    
}