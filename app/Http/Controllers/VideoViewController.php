<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class VideoViewController extends Controller
{
    public function index(){
      $videos = DB::select('select * from videos');
      return view('videos',['videos'=>$videos]);
   }

   public function byvotes(){
      $videos = DB::select('select * from videos order by votes desc');
      return view('videos',['videos'=>$videos]);
   }

      public function byrandom(){
      $videos = DB::select('select * from videos order by rand()');
      return view('videos',['videos'=>$videos]);
   }
}
