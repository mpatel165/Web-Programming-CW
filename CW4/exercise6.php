<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 6</title>
</head>
<body>
<form action="exercise6.php" method="post">
        <p>Write any words that have a letter <span style="color: blue;">e</span>  and submit, it'll remove e <span style="color: blue;">e</span> from that word":</p>
    <input type="text" name="username">
    <input type="submit" value="submit">
    </form>

    <?php
    function remove_all($string, $letter){
        $length = strlen($string);
         $new_string = "";
        for ($i=0; $i<$length; $i++) {
            if ($string[$i] !== $letter) {
            $new_string = $new_string.$string[$i];
        }
        }
        return $new_string;
    }
    $input = $_POST["username"];
    echo remove_all($input,"e");
    ?>
</body>
</html>