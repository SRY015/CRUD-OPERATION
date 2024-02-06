<?php

$con = mysqli_connect("localhost","root","","crud") or die("Connection did not established successfully");

$sql = "delete from student where sid=$_GET[sid]";

$result = mysqli_query($con, $sql) or die("Query unsuccesfull");

mysqli_close($con);

?>

<script>

alert(" Record deleted successfully !!");

window.location.href = "index.php";

</script>