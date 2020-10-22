<h1>Meet Fav Restraunt</h1>

<h2>Order Results</h2>

<?php
echo "Order processed at ".date("h:i, m/d/Y", time())."<br><br>";

echo "Your order is as follows:<br><br>";

$dish1 = (int)$_POST["Dish1"];
$dish2 = (int)$_POST["Dish2"];
$dish3 = (int)$_POST["Dish3"];
$find = $_POST["find"];

$subtotal = 0;
$dishesOrdered = 0;

if($dish1>0){
    $subtotal += $dish1*2100;
    $dishesOrdered += 1;
}
if($dish2>0){
    $subtotal += $dish2*199;
    $dishesOrdered += 1;
}
if($dish3>0){
    $subtotal += $dish3*899;
    $dishesOrdered += 1;
}
$total = $subtotal*1.1;
echo "Dishes Ordered : ".$dishesOrdered."<br>";
if($dishesOrdered==0){
    echo "You did not order anything on the previous page! <br>";
}
echo "Subtotal : $".$subtotal."<br>";
echo "Total including tax : $".$total."<br><br>";
echo "Customer referred by ".$find."<br>";
?>