<?php
    $folder_name = "Hasan"; //Does such a file exist?
    if(file_exists($folder_name))
    {
        echo "Folder Already exists!";
        exit(); //Stop Process
    }
    $create = mkdir($folder_name, 0700);
    if($create)
    {
        echo "Folder Created.";
    }
    else{
        echo "Folder Not Created!";
    }
?>