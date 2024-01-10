<?php
    $now = getdate(); //It is a returning array
    print_r($now); //Write all values ​​in the array
    echo "<hr>";
    echo "Seconds: ", $now["seconds"],"<br>";
    echo "Minute: ", $now["minutes"],"<br>";
    echo "Hour: ", $now["hours"],"<br>";
    echo "Day: ", $now["mday"],"<br>";
    echo "What day of the week is: ", $now["wday"],"<br>";
    echo "Month: ", $now["mon"],"<br>";
    echo "Year: ", $now["year"],"<br>";
    echo "What day of the year is: ", $now["yday"],"<br>";
    echo "Which day of the week: ", $now["weekday"],"<br>";
    echo "Which month of the year: ", $now["month"],"<br>";
?>