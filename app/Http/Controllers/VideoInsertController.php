<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class VideoInsertController extends Controller
{
    public function insertform(){
      return view('submit');
   }




	
   public function insert(Request $request){
      $link = $request->input('link');
      $email = $request->input('email');
      $comment = $request->input('comment');

      	$url = $link;
   		preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
    	$id = $matches[1];

      $values = array('link' => $id,'email' => $email, 'comment'=> $comment);
		DB::table('videos')->insert($values);

     	return view('submit');
   }
}
