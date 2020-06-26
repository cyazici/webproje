<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;
use App\abouts;
class SiteController extends Controller
{
    public function index(){
        $news=news::all();

      return view('index',compact('news'));
    }
    public function about(){
        $abouts=abouts::all();
        return view('about',compact('abouts'));
    }

    public function uyeiletisim(){

        return view('uyeiletisim');
    }
}
