<?php
    $folder_name = "Test";
    if(!file_exists($folder_name))//Is there such a folder?
    {
        echo "No folders to delete...";
        exit();
    }
    $folder_delete = rmdir($folder_name);
    if($delete_folder)
    {
        echo "Folder Deleted...!";
    }
    else{
        echo "Failed to delete folder...!";
    }
?>