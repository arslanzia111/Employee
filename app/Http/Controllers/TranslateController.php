<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranslateController extends Controller
{
    public function index(){

        // echo lang::get('Translate.page');
        return view('Translate.page');
    
    }
}
