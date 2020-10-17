<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Exercise 5</title>
</head>
<body>
<form action="exercise5.php" method="post">
        <p>Write any String and it'll provide how many times the word occurs:":</p>
    <input type="text" name="input" value="<?= @$_POST['input']?>" />
    <input type="submit" value="submit">
    </form>
<?php
function countWords($str) {

$splitstring=explode(" ",$str);
$wordcountarray = array();
foreach($splitstring as $word => $word_count)
{
   if (array_key_exists( $word_count , $wordcountarray))
{
$wordcountarray[$word_count]+=1;
}
else
{
$wordcountarray[$word_count]=1;
}
}
print_r($wordcountarray);
}
$str =strtolower($_POST['input']);
countWords($str);
?>
</body>
</html>