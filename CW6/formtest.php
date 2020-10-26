<!DOCTYPE >

<head>
  <title>Form Data</title>
</head>
<body>

<?php 

if (isset($_POST['visitor_name']) || isset($_POST['password']) || isset($_POST['licenseOK'])||
isset($_POST['account_type']) || isset($_POST['options']) || isset($_POST['system']) || isset($_POST['remarks'])){
 $visitorsname1 = $_POST["visitor_name"];
 $password1 =  $_POST["password"];
 $license1 =  $_POST["licenseOK"];
 $account1 = $_POST["account_type"];
 $option = $_POST["options"];
 $system1 = $_POST["system"];
 $remark1 = $_POST["remarks"];

 echo " <h1>Form input values</h1>";
 echo "<p>Your Name: $visitorsname1 </p>";
 echo "<p>Your Password: $password1 </p>";
 echo "<p>License accepted:$license1 </p>";
 echo "<p>Account type: $account1 </p>";
 
 echo "<p> Your options are: ";foreach($option as $values)
 {
   echo "$values". " ";
 }
 echo "<p>Operating system: $system1</p>";
 echo "<p>Remarks: $remark1 </p>";
}
?>
</body>
</html>