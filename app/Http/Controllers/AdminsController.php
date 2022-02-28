<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Comment;
use App\Model\Post;
use App\Model\User;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('accessright');
    }

    public function index(){

        $data['users'] = User::where('id','!=',1)->count();
        $data['posts'] = Post::count();
        $data['category'] = Category::count();
        $data['comment'] = Comment::where('status','pending')->count();
        return view('admin.index',$data);

    }

}
