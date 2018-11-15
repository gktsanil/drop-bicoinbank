<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MerchantController extends Controller
{
    //

    public function get_index(){
      return view('backend.index');
    }

    public function get_settings(){
      return view('backend.settings');
    }

    public function post_settings(Request $request){
      Settings::create($request->all());
    }
}
