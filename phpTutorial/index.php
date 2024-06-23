<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $name = "Mihika"
    ?>
    <?php
    // echo $_SERVER["DOCUMENT_ROOT"];
    // echo "<br>";
    // echo $_SERVER["PHP_SELF"];
    // echo "<br>";
    // echo $_SERVER["SERVER_NAME"];
    // echo "<br>";
    // echo $_SERVER["REQUEST_METHOD"];

    //echo $_GET["fname"];

    //echo $_REQUEST["fname"];

    // $_SESSION["username"] = "Armstrong";
    // echo $_SESSION["username"];

//--------------------------------------------------------------------------------    
    //OPERATORS
    echo "OPERATORS";
    echo "<br/>";echo "<br/>";
    //string concatination
    $a = "hello";
    $b = "world";
    $c = $a . " " . $b; //spaces between are important
    echo $c;
    echo "<br/>";

    //arithmetic operation
    echo 2+6;
    echo "<br/>";

    //operator precedence
    echo (1 + 3) * 4; 
    echo "<br/>";

    //assignment operators
    $d = 3; //3 is assignmed to variable 'd'
    $d += 4;
    echo $d; 
    echo "<br/>";

    //comparison operator
    $e = 2;
    $f = 7;

    if ($e <> $f){  //2 equal sign means we are comparing data and 3 means we are comparing data-types
        echo "This is statement is true";
    }
    echo "<br/>";

    //logical operator
    $g = 6;
    $h = 6;
    $i = 5;
    $j = 7;

    if($g == $h or $i == $j){
        echo "Statement is true";
    }
    echo "<br/>";

    //incrementing and decrementing operator
    $k = 1;
    echo $k++;
    echo $k;
    echo "<br/>";
    echo $k--;
    echo $k;

    echo "<hr>";
//---------------------------------------------------------------

echo "CONTITONALS & CONTROL STRUCTURES";
echo "<br/>";echo "<br/>";

    $bool = true;
    $l = 1;
    $m = 4;

    if ($l < $m && !$bool) {
        echo "First condition is true!";  
    }else if ($l > $m && $bool){
        echo "Second condition is true!";
    } else {
        echo "No condititon is true!";
    }

    echo "<br/>";
    echo "<br/>";

    //switch case
    echo "SWITCH CASE";
    echo "<br/>";
    switch($m){
        case 1:
            echo "The 1st case is correct";
            echo "<br/>";
            break;
        case 4:
            echo "The 2nd case is correct";
            echo "<br/>";
            break;
        default:
            echo "None of the conditions is true";
            echo "<br/>";
            break;
    }
    echo "<hr>";

//---------------------------------------------------------------
    //match function
    echo "MATCH FUNCTION";
    echo "<br/>";echo "<br>";
    $result = match($m) {
        1, 3, 6 => "Variable 'l' is equal to one",
        2, 4 => "Variable 'l' is equal to 2 or 4",
        default => "None were a match";
    };

    echo $result;

    ?>
</body>
</html>