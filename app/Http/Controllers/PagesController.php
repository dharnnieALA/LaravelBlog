<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index(){
        $title = "This is Kampasi";
        return view('pages.index',compact('title'));  
        //return view('pages.index')->with('title',$title);
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        $data = array(
            'title'=>'Worlds Raddest man',
            'name'=>'Elon Musk',
            'startups' =>['Tesla','SpaceX']
        );
        return view('pages.services')->with($data);
    }
}
