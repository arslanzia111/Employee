<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\datatable;
use App\employee;
class EmployeeController extends Controller
{
    public function index(){
        
        return view('Datatable.datatable');
    }
    public function store(Request $req){
        
        $data = new datatable;
        $data->fname=$req->input('fname');
        $data->lname=$req->input('lname'); 
        $data->position=$req->input('position');
        $data->age=$req->input('age');
        $data->salary=$req->input('salary');
        $data->department=$req->input('department');
        $data->save();  
        
        
        //create
        //insert
       return redirect()->back();  //?????????->withStatus('Successfully Created'); // redirect back
        //return redirect()->route('employee.index')->withStatus('Successfully Created'); // redirect back
        //return response()->json([$data, 'message'=>'Successfully created.']); // 
    }
    public function show(){

        $store= datatable::all();
        if(view::exists('Datatable.datatable')){
        return view('Datatable.datatable', compact('store'));
        }
        
            return "No view found";
        

    }
    public function firstview(){
        //return view::first(['main','Employee.employee','Datatable.datatable']);
        return view('Employee.employee',['name'=>'Arslan']);
        

    }
    public function boot(){
        view::share('name','Arslan Zia');
    }
    public function a(){
        return view('Employee.employee');
    }
    public function b(){
        return view('Master.master');
    }
    
}