<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class VideoUpdateController extends Controller
{
    public function index(){
      $videos = DB::select('select * from videos order by rand() limit 2;');
      return view('index',['videos'=>$videos]);
   }
   
   public function vote($id) {
      DB::update('update videos set votes = votes +1 where id = ?',[$id]);
      return redirect('');
   }
}
