<?php

$id = $_POST['sid'];
$name = $_POST['sname'];
$address = $_POST['saddress'];
$class = $_POST['sclass'];
$phone = $_POST['sphone'];

$con = mysqli_connect("localhost","root","","crud") or die("Connection did not established successfully");

$sql = "update student set sname='$name', saddress='$address', sclass=$class, sphone=$phone where sid=$id";

$result = mysqli_query($con, $sql) or die("Query unsuccesfull");

header("location:index.php");

mysqli_close($con);

?>