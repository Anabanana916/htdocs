<?php

    $topmodules[0] = "Internet Systems Development";
    $topmodules[5] = "Programming 1";
    $topmodules[10] = "Programming 2";
    $topmodules[30] = "OOAD";
    $topmodules[40] = "Software Engineering";

    $value = 40;
    foreach($topmodules as $index)
    {
        if($index == 40) break;
        echo "Index in $index and value is $value <br/>";
    }
    //HELP
