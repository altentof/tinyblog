<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Article;
use App\Comment;


class manage extends Controller
{
    //
    public function addarticle(Request $request)
    {
        if($request->isMethod('post')){
            $newArtical = new Article();
            $newArtical->title=$request->input('title');
            $newArtical->body=$request->input('body');
            $newArtical->user_id=auth::user()->id;
            $newArtical->save();
            return redirect('view');
        }   
         return view('manage.addarticle');
    }
    public function view(){   
        $GetAllProductsRecodr = Article::all();
        $ProductsArray = Array('GetAllProductsRecodr'=> $GetAllProductsRecodr);
        return view('manage.view',$ProductsArray);
    }
    public function read(Request $request, $id){ 
        
        if($request->isMethod('post')){
            $newArtical = new Comment();
            $newArtical->comment=$request->input('newcomment');
            $newArtical->article_id= $id;
            $newArtical->save();
            //return redirect('view');
        }   
        
        $GetAllProductsRecodr = Article::find($id);
        $ProductsArray = Array('GetAllProductsRecodr'=> $GetAllProductsRecodr);
        return view('manage.read',$ProductsArray);
    }
}
