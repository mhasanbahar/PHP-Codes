<?php
//We can change the defined value for if else controls.
    $temp = 5;
    if (-30 < $temp && $temp <= -10){
        $state = "Too Cold";
    }
    else if (-10 < $temp && $temp <= 0){
        $state = "Cold";
    }
    else if ( 0 < $temp && $temp <= 10)
    {
        $state = "Cool";
    }
    else if (10 < $temp && $temp < 30){
        $status = "Hot";
    }
    else{
        $status = "Too Hot";
    }
    echo $status;
    ?>