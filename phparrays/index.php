<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
   // $fruit = array("Apple", "Banana", "Watermelon"); method 1 to declare array
     $fruits = ["Apple", "Banana", "Watermelon"]; //methid 2 to declare array

    // echo $fruits[0];
    // echo "<br>";

    // $fruits[3] = "Orange";
    // echo $fruits[3];
    // echo "<br>";

    //unset($fruits[0]);
    //echo $fruits[0];

    // array_splice($fruits, 0, 1);
    // echo $fruits[1];

    /*$tasks = [
        "business" => "Mihika",
        "acting" => "Rebecca",
        "playing" => "Bonbon",
        "assistant" => "Bella"
    ];*/

   // echo $tasks["business"]; //output -> Mihika

   //print_r($tasks); //Array ( [business] => Mihika [acting] => Rebecca [playing] => Bonbon [assistant] => Bella )

    // echo count($tasks);

    // echo "<br>";

    // sort($tasks);
    // print_r($tasks);

    echo "<br>";

    // array_push($fruits, "Peaches");
    // print_r($fruits);

    $test_fruits = ["Cherry", "Kiwi"];
    array_splice($fruits, 2, 0, $test_fruits); //output -> Array ( [0] => Apple [1] => Banana [2] => Cherry [3] => Kiwi [4] => Watermelon )
    print_r($fruits); 
    ?>

</body>
</html>