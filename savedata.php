<?php
$name = $_POST['sname'];
$address = $_POST['saddress'];
$class = $_POST['class'];
$phone = $_POST['sphone'];

$con = mysqli_connect("localhost","root","","crud") or die("Connection did not established successfully");

$sql = "insert into student values(null, '$name', '$address', $class, $phone)";

$result = mysqli_query($con, $sql) or die("Query unsuccesfull");

header("location:index.php");

mysqli_close($con);
?>