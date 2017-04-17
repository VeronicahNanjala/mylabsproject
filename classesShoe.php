<?php
 class Myshoes{

     public $name;
     public $size;

     function __construct($s, $n)
     {
         $this-> name=$n;
         $this -> size= $s;
     }

//        function shoeInfo($s, $n){
//         $this-> name=$n;
//         $this -> size= $s;
//
//        }

        function printShoe(){
            echo "Name:  ". $this -> name . " and ". "Size:  ".$this -> size . "<br> 2nd Name: ";

        }
 }

// $aShoe = new MyShoes (6, "Nike");
 //$aShoe -> shoeInfo(6, "Nike");
 //$aShoe -> printShoe();
 ///second class
class Nike extends Myshoes{
private $model;
    function __construct($s, $n, $m)
    {
        parent::__construct($s, $n);
        $this -> model=$m;
    }

    function printyShoe()
    {
//        echo "Name:  ". $this -> name . " <br> ". "Size:  ".$this -> size;
        parent::printShoe();
        echo "" . $this->model;

    }
}

//$nike = new Nike(7,"Nike","Rubber");
//$nike -> printyShoe();

//create array
$myArray = array();

// create three objects
$obj1= new Nike(8,"Nike","Rubber");
$obj2= new Nike(9,"Nike1","Rubber1");
$obj3= new Nike(10,"Nike2","Rubber2");

// store objects in the array
array_push($myArray,$obj1);
array_push($myArray,$obj2);
array_push($myArray,$obj3);

var_dump($myArray);
//$myArray =array([$this -> obj1], [$this -> obj2], [$this -> obj2]);

?>