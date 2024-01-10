<?php
    function calculate(){         
        for($i = 0; $i < 20; $i++){
            $count = $i * $i;
            echo $count . "<br>"; // To print the code one under the other;
        }
    }
    $file = "file.text";
    $file = fopen($file, "a+");//File opened
    $data = calculate();
    fwrite($dosya, $say);//Information written to the file
    echo "Data printed.";
    fclose($file);
?>