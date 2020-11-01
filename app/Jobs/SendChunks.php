<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\datatable;
class SendChunks implements ShouldQueue
{
    protected $users;
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($users)
    {
        $this->users=$users;
        // dd($this->users);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $chunkedData = $this->users;
        // dd($chunkedData);
        foreach($chunkedData as $data)
        {
            $datatable=new datatable;
            $datatable->create($data->only($datatable->getfillable()));

                // datatable::create([
                // 'name'=>$data['name'],
                // 'email'=>$data['email'],
                // 'cnic'=>$data['cnic'],
                // 'phone'=>$data['phone'],
                // 'address'=>$data['address'],
                // ]);
        }



        // // dd($this->users);
        // // dd($this->users);
        // $data = new datatable;
        // $data->name=$this->users;
        // $data->email=$this->users; 
        // $data->cnic=$this->users;
        // $data->phone=$this->users;
        // $data->address=$this->users;
        
        // $data->save(); 

        // // return "Successfull";
    }
}
