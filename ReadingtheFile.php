<?php
    $file = fopen("file.text", "r");//Opening File
    if(!($file))//File checking is in progress
    {
        echo "There is no such file.";
        exit();//Exit if there is no file
    }
    while(!feof($file))// Reads to the End of the File
    {
        $satir = fgets($file);//Transfer data until finished
        echo ("$satir");
    }
    fclose($file);
?>