<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;
use App\User;
use App\abouts;
use Illuminate\Support\Facades\DB;
class ApanelController extends Controller
{
    public function PanelHome()
    {
        $news = news::all();
        return view('PanelHome', compact('news'));
        }

        public function haberekle(){
        return view('haberekle');
    }

      public function haberkayit(){
        $news =new news();
        $news->title=request('title');
        $news->content=request('content');
        $news->writer=request('writer');
        $news->save();

        return redirect()->intended(route('Panel.show'));
    }


            public function users(){
                $user=User::all();
                return view('users',compact('user'));

            }
            public function userupdate(){
                return view('userupdate');
            }
            //Update sayfasına id ye göre güncellenecek verileri çekiyorum
            public function updateusers($id){
                $user=User::find($id);
                return view('userupdate',compact('user'));
            }
            //Update sayfası içinde güncelleme işlemi yapıyorum.
            public function update($id){
                $user=User::find($id);
                $user->yetki=\request()->input('yetki');
                $user->name=\request('name');
                $user->email=\request('email');
                $user->save();
                return redirect()->intended(route('users.show'));
            }
            public function kullanicisil($id){
                $user=DB::table('users')->where('id',$id)->delete();
                return redirect()->intended(route('users.show'));
            }



            public function hakkimda(){
                $abouts=DB::table('abouts')->get();


                return view('hakkimda',compact('abouts'));
            }

            public function hakkimdaguncelle(){

                $abouts=DB::table('abouts')->where ('id','2')->update(
                    [
                    'name'=>\request('name'),
                    'phone'=>\request('phone'),
                      'email'=>\request('email'),
                        'adres'=>\request('adres'),
                        'about'=>\request('about'),
                        'Hschool'=>\request('Hscholl'),
                        'uni'=>\request('uni'),
                    ]
                );
                return redirect()->intended(route('hakkimda.show'));
        }




        public function uyeiletisim(){
                return view('uyeiletisim');}


}
