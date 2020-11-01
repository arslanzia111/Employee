<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
// use Carbon\Carbon;
use App\jobs\SendChunks;
use App\User;
class QueueController extends Controller
{
    public function chunks(Request $request){
        // $chunkSize = $request->chunkSize;
        $time = 30;
        $data= User::all();
        $data = Collect($data);
        $now=  now();
        $data->chunk(100)
             ->each(
            function($data) use ($now,$time) { 
            SendChunks::dispatch($data)->delay($now->addSeconds($time));
            $time += $time;
        });

        return response()->json("Working");
}


    // public function chunks(){
    
    // $users=DB::table('users')->get()->chunk(100);
    // // dd($users);
    // // $job = new SendChunks()->delay(Carbon::now()->addMinutes(5));
    // // ->toArray()
    
    // $job = (new SendChunks($users))->delay(Carbon::now()->addMinutes(1));
    // // dd($job);
    // dispatch($job);



    // foreach(array_chunk($users, 1000) as $chunk){
    //     dd($chunk);
    // }



//     $a= collect($users)->chunk(100)->first();
// dd($a);


   


    // foreach ($users)
    // {
    //     $users->chunks(100);
    // }
    

    
}
