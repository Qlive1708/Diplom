<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Comment;
use App\Model\Admin;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\User;

class AdminHomeController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
    }

    public function index(Request $request,$id=null)
    {
        if (isset($request['keyword']) && $request['keyword']!=""){

            $query = Admin::Where(function ($query)  use ($request){
                $query->orwhere('title', 'like', '%' . $request['keyword'] . '%')
                    ->orwhere('body', 'like','%' . $request['keyword'] . '%');
            })->where('status','active')->select();
        }
        else {

            $query = Admin::where('status','active')->select();
        }
        if($id!=""){
            $posts = $query->where('category_id',$id)->orderBy('id','DESC')->paginate(10);
            $selected_cat = $id;
        }
        else{
            $selected_cat = 0;
            $posts = $query->orderBy('id','DESC')->orderBy('id','DESC')->paginate(10);
        }

        $link = $posts->withPath('/');
        //return $link;
        $category = Category::where('status','active')->orderBy('name','ASC')->get();

        return view('my-home', ['posts'=> $posts,'categories'=>$category,'links'=>$link,'selected_category'=>$selected_cat]);
    }

    public function search(Request $request,$id=null)
    {
        if (isset($request['keyword']) && $request['keyword']!=""){

            $query = Admin::Where(function ($query)  use ($request){
                $query->orwhere('title', 'like', '%' . $request['keyword'] . '%')
                    ->orwhere('body', 'like','%' . $request['keyword'] . '%');
            })->where('status','active');
        }
        else {

            $query = Admin::where('status','active');
        }
        if($id!=""){
            $posts = $query->where('category_id',$id)->orderBy('id','DESC')->paginate(10);
            $selected_cat = $id;
        }
        else{
            $selected_cat = 0;
            $posts = $query->orderBy('id','DESC')->paginate(10);
        }

        $link = $posts->withPath('/');
        //return $link;
        $category = Category::where('status','active')->get();

        return view('my-home', ['posts'=> $posts,'categories'=>$category,'links'=>$link,'selected_category'=>$selected_cat]);
    }

    public function post_detail($id)
    {
        $category = Category::where('status','active')->get();
        $posts = Admin::where('id',$id)->first();
        $comments = Comment::where('post_id',$id)->where('parent_id',0)->where('status','approved')->get();
        return view('My-blog-post', ['post'=> $posts,'categories'=>$category,'comments'=>$comments]);
    }










    public function profile(){
        $data['user'] = Auth::user();
        return view('profile',$data);
    }

    public function update_profile(Request $request){
        $inputs = request()->validate([
            'username'=> ['required', 'string', 'max:255','alpha_dash'],
            'name'=> ['required', 'string', 'max:255'],
            'email'=> ['required', 'email', 'max:255'],
            'avatar'=> ['file']
        ]);

        $id = Auth::user()->id;
        $user = User::findorFail($id);

        if (!empty($request['password'])) {
        } else {
            unset($request['password']);
        }

        $inputs = $request->all();

        if(request('avatar')){
            $inputs['avatar'] = request('avatar')->store('public/images');
        }

        $user->update($inputs);
        \Illuminate\Support\Facades\Session::flash('message', 'Profile updated successfully!');
        \Illuminate\Support\Facades\Session::flash('alert-class', 'alert-success');
        return redirect('user/profile');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->flush();
        return redirect('/');
    }

    public function add_comment(Request $request){
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        $input['status'] = 'pending';
        $comment = Comment::create($input);
        \Illuminate\Support\Facades\Session::flash('message', 'comment added successfully!');
        \Illuminate\Support\Facades\Session::flash('alert-class', 'alert-success');
        return redirect()->back();
    }
}
