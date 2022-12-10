<?php 


// Making a new class Mobile as per the practice.
class Mobile{

    public $model = "Maanik"; 
    public static  $name = "cover" ; 

    public  function modelName($name = ""){
        // echo Mobile::$model ; 

        echo $this->model ; 

        // echo $model ; 
    }
}


$object = new Mobile ; 

$object->modelName() ;

// echo Mobile::$model ; 
// Mobile::modelName() ; 






?>