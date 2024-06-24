<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form handling in php</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <form action="includes/formhandler.php" method="post">
            <label for="firstname">Firstname</label>
            <input id="firstname" type="text" name="firstname" placeholder="Firstname">

            <label for="lastname">Lastname</label>
            <input id="lastname" type="text" name="lastname" placeholder="Lastname">

            <label for="favoritecolor">Favorite Color</label>
            <select name="favouritecolor" id="favouritecolor">
                <option value="none">None</option>
                <option value="black">Black</option>
                <option value="blue">Blue</option>
                <option value="white">White</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </main>
</body>
</html>