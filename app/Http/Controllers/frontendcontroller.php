<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\berita;

class frontendcontroller extends Controller
{
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function news(){
        return view('news');
    }
    public function index(){
        $sliders = berita::where('tanggal')->get();
        return view('/index', compact('sliders'));
    }

}
