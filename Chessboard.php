<?php
    function CreateChessBoard($row, $column)
    {
        echo "<table width = 400 height = 400 border = 1>";
        for($i = 1; $i <= $row; $i++)
        {
        echo "<tr>";
        for($j = 1; $j <= $column; $j++)
        {
            $box = $i + $j;
            if($box %2 == 1)
            {
                echo "<td bgcolor = black> </td>";
            }
            else{
                echo "<td> </td>";
            }           
        }
        echo "</tr>";
        }
                echo "</table>";
    }
    CreateChessBoard(8,8);
?>