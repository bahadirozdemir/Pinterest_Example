<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Anasayfa extends Controller
{
    public function gonder(Request $veri)
    {
      return view("index",['kategorid'=>$veri->kategorid]);
    }
    public function girisyap(Request $veri)
    {
      if(Auth::attempt(['email' => $veri->mailadres, 'password' =>$veri->pwd]))
      {
        return redirect()->route('anasayfa','1911873');
      }
      else {
         return view("girisyap")->withErrors("E-Mail Adresi veya Şifre Yanlış.");
      }
    }
    public function singlepost(Request $veri)
    {

      $baslik="https://images.unsplash.com/";
      $deneme="?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=400&ixid=MnwxfDB8MXxyYW5kb218MHwxMDI3NzUwfHx8fHx8fDE2NTE0NDkwNzg&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=200";
      $url=$baslik.$veri->url.$deneme;
      return view('post',['url'=>$url,'benzer'=>$veri->kategorid]);
    }
}
