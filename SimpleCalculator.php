<html>
    <head>
        <title>Simple Calculator</title>
    </head>
    <body>
        <div class="container">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <div class="form-group">
                    <label for="number1">Number 1</label>
                    <input type="text" class="form-control" name="number1">
                </div>
                <div class="form-group">
                    <label for="number2">Number 2</label>
                    <input type="text" class="form-control" name="number2"> 
                </div>
                <div class="form-group">
                <label for="Selection">Transaction Selection</label>
                <select name="Selection" class="form-control">
                        <option value="+">Total</option>
                        <option value="-">Subtraction</option>
                        <option value="*">Multiplication</option>
                        <option value="/">Division</option>
                </select>
                </div>
                <button type="submit" name="control" class="btn btn-default">Run</button>
            </form>
        </div>
        <div class="container">
            <table class="table table-striped">
                <?php
                if(isset($_POST["control"]))//A form called Control
                {
                    $number1=$_POST["number1"];
                    $number2=$_POST["number2"];
                    $Selection=$_POST["Selection"];
                    $conclusion = 0;

                    if($Selection == '+'){
                        $sonuc=$number1+$number2;
                    }
                    elseif($Selection== '-'){
                        $sonuc=$number1-$number2;
                    }
                    elseif($Selection== '*'){
                        $sonuc=$number1*$number2;
                    }
                    elseif($Selection== '/'){
                        $sonuc=$number1/$number2;
                    }
                    echo "<h1 class='text-info'>$conclusion</h1>";
                }
                ?>
            </table>
        </div>
    </body>
</html>