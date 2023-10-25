<?php 
    // sayMyName("Hlaing Min Than", "Min Than");
    // function sayMyName($name, $secondName) {
    //     echo $name."_".$secondName;
    // }
    

    // // anonymous func
    // $sayMyAge = function($age) {
    //     echo $age;
    // };
    // $sayMyAge(20);


    // variable scoping
    // global
    $name = "Hlaing Min Than";
    $age = 20;
    
    function myAge() {
        // local
        
        global $name, $age;
        echo $age.$name;
    }

    myAge();

    // echo $age;

?>