<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;
use App\abouts;
use App\User;
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
        $userdata=User::all()->where('id',auth()->user()->id);
        return view('uyeiletisim',compact('userdata'));

    }

}
