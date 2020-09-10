<?php

class Circle {
    public $Area;
    //khoi tao

        public function __construct($Area){
        $this->Area=$Area;
        }
        //tinh chu vi
        public function Perimeter(){
            $kq= ($this->Area*2)*3.14;
            return $kq;
        }
        //tinh dien tich
        public function acreage(){
            $kq= ($this->Area*$this->Area)*3.14;
            return $kq;
        }
    }
    if(isset($argv[1]) and is_numeric($argv[1])){
    $circle = new Circle($argv[1]);
        echo "-------------------------------------------------------- \n";
        echo "Perimeter : ";
        echo $circle->Perimeter();
        echo "\n";
        echo "acreage : ";
        echo $circle->acreage();echo "\n";
        echo "\n -- Thank you -- \n";
    }
    //ng dung nhap sai
    else{
        echo "\n please enter the number \n";
    }
