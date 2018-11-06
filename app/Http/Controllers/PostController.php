<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $title= 'Welcome To Laravel';
        //return view('layouts.index',compact('title'));
        return view('layouts.index')->with('title',$title);
    }
    public function about(){
       // return view('layouts.about')->with('title',$title);
        return view('layouts.about',compact('title'));
    }
    public function service(){
        $data=array(
            'title'=>'Services',
            'services'=>['Web Design','Programing','SEO']
        );
        return view('layouts.service')->with($data);
       // return view('layouts.service');
    }

}
