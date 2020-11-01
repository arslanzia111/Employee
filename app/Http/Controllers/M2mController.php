<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;
use App\product;

class M2mController extends Controller
{
  public function index(Request $req){

   // return view('Many_to_many.M2m');
    
        $data = new customer;
        $data ->name=$req->input('name');
        $data->save();
    
    }
    public function product(Request $req){

        // return view('Many_to_many.M2m');
         
             $data = new product;
             $data ->name=$req->input('name');
             $data->save();
         
         }
}
