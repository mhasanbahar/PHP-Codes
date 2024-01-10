<?php
    $file_name = "file.text";
    if(unlink($file_name)){
        echo "File Deleted";
    }
?>