<?php

namespace App;

class customer{
    private $amount;
    public function __construct($amount){
        // $this->amount=$amount;
        return $this->amount*10;
    }
    public function toCentimeter(){
        return $this->amount*10;
    }

}

