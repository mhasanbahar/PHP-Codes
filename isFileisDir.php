<?php
    $file_or_folder_name = "test";
    if(is_file($file_or_folder_name))
    {
        echo "This is a file";
    }
    if (is_dir($file_or_folder_name))
    {
       echo "This is a folder";
    }
?>