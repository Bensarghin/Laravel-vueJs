<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CommentController extends Controller
{
    public function Index()
    {
        $tb=Comment::all();
        $arr=Array('comment'=>$tb);
        return view('/admin.pages.comments.index',$arr);
    }
    public function Insert(Request $req)
    {
        if($req->isMethod('POST')){
        //inset new record into table
        $newcmt=new comment();
        $newcmt->content=$req->input('comment');
        $newcmt->news_id='1';
        $newcmt->user_id='1';
        $newcmt->save();
        return Redirect('/index');
        }
        return view('/admin.pages.comments.insert');
    }

    public function Update(Request $req,$id)
    {
        if($req->isMethod('GET')){
            $tb=Comment::find($id);
            $arr=Array('comment'=>$tb);
            return view('/admin.pages.comments.update',$arr);
            }
        else{     
            $newcmt=Comment::find($id);
            $newcmt->content=$req->input('comment');
            $newcmt->save();  
            return redirect("admin/comments");
        }   
    }

    public function Delete()
    {
        //delete existe table
    }
}
