<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3</title>
</head>
<body>
    <form action="exercise3.php" method="post">
    Number of Stars:<input type="text" name="userinput">
    <input type="submit">
    </form>
    <?php
    $numberofstars = $_POST["userinput"];
    for($i=1; $i<=$numberofstars; $i++)
    {
        for($j=1; $j<=$i; $j++)
        {
            echo "*";
        }
            echo "<br>";
    }
    ?>
</body>
</html>