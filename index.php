<?php
    declare(strict_types = 1);
    require __DIR__ . '/vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caculator PHP-OOP</title>
    <style>
		body {
			background-color: #222;
			color: #eee;
		}

        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #b3b3b3db;
            color: #eee;
            text-align: center;
        }
	</style>

</head>
<body>

    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
        <h1>Calculator (PHP_OOP)</h1>
        <input type="number" name="num1" placeholder="First number">
        <select name="oper">
            <!-- <option value="" selected disabled hidden>Select operation</option> -->
            <option value="+">+ (add)</option>
            <option value="-">- (substract)</option>
            <option value="/">/ (divide)</option>
            <option value="*">* (multiply)</option>
            <option value="%">% (modulo)</option>
            <option value="pow">pow (power raise)</option>
        </select>
        <input type="number" name="num2" placeholder="Second number">
        <button type="submit" name="submit">Calculate</button>
    </form>

    <?php

        try {
            if (isset($_POST["oper"], $_POST["num1"], $_POST["num2"])) {
        
                $oper = $_POST["oper"];
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
        
                $calc = new Calc($oper, (int)$num1, (int)$num2);
        
                //try {
                    echo "<h4>The result is: " . $calc->calculator() . "</h4>";
                    echo "<h4>" . $calc->num1 . " " . $calc->operator . " " . $calc->num2 . " = " . $calc->calculator() . "</h4>";
                //} catch (TypeError $e) {
                 //   echo "Error!: " . $e->getMessage();
                //}
            } else {
                echo "<h4>Please input values!</h4>";
            }
        } catch (TypeError $e) {
            echo "Error!: " . $e->getMessage();
        }
    
    ?>

    <footer>
        <h3><a href="https://github.com/iulianabc67/Calculator-PHP_OOP.git">View code on GitHub</a></h3>
    </footer>
    
</body>
</html>
