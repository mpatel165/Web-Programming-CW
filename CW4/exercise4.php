<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 4</title>
</head>
<body>
    <form action="exercise4.php" method="post">
    Phrase:<input type="text" name="phrase">
    <input type="submit">
    </form>
    <?php
    $noofwords = $_POST["phrase"];
    echo str_word_count($noofwords);
    echo "<br>";
    ?>
</body>
</html>