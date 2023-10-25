<?php

    // $arrays = ["hmt", "programmer", 20];

    // foreach($arrays as $k=>$array) {
    //     echo $k." ".$array."<br>";
    // }
    $myBios = [
        "name" => "hmt",
        "job" => "programmer",
        "age" => 20,
    ];

    foreach ($myBios as $key => $myBio) {
        echo $key."=".$myBio."<br>";
    }
?>