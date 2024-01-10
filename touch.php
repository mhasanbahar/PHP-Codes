<?php
    $file_name = "file.txt";
    if(file_exists($file_name))
    {
        echo "The file already exists!";
    }
    else
    {
        touch($file_name);
        echo "File Created.";
    }
?>