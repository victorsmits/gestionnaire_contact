<?php
class Cart{
    public $CartArray;
    public $Count;

    public function __construct()
    {
        $this->CartArray = [];
        $this->Count = 0;
    }

    public function AddToCart($new){
        if(! in_array($new,$this->CartArray)){
            return array_push($this->CartArray, $new);
        }
        else{
            return $this->CartArray;
        }
    }

    public function TotalCount(int $price){
        return $this->Count += $price;
    }
}
