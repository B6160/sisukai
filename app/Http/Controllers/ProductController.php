<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    function create(){

        return view('create');
    }

    function add(Request $request){

        $post=new Product();
        $post->name=$request->name;
        $post->price=$request->price;

        dd($post);
        return view('show')->with('post',$post);

    }
}
