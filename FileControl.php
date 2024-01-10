<?php
    $file_name = "file.txt";
    if(file_exists($file_name))
    {
        echo "File already exists";
    }
    else{
       touch($file_name);
       echo "File Created";
    }
?>