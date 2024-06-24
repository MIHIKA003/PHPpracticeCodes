<?php
session_start();

$_SESSION["username"] = "Saraf"; //this info is going to be remembered on ur server on any page that has this session_start() at the top of the page
//session_unset(); // it's going to perch all the session data inside our session so that we can't access that data in the browser

session_destroy(); //stopping the session from running again.

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    echo $_SESSION['username'];
    ?>

</body>
</html>