<?php 

//var_dump($_SERVER["REQUEST_METHOD"]);

//if (isset($_POST["submit"])) - old method

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = htmlspecialchars($_POST["firstname"]);  //htmlspecialchars: it take your html data and converts them into html entities
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favouritecolor = htmlspecialchars($_POST["favouritecolor"]);

    if(empty($firstname)) {
        exit();
        header("Location: ../index.php"); 
    }

    echo "This is the data submitted by the user";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favouritecolor;

    header("Location: ../index.php"); //this function sends the user back to the directed page
}
else{
    header("Location: ../index.php"); 
}