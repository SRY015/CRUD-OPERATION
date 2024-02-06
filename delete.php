<?php 

include 'header.php'; 

if(isset($_POST['deletebtn'])){

    $id = $_POST["sid"];

$con = mysqli_connect("localhost","root","","crud") or die("Connection did not established successfully");

$sql = "delete from student where sid=$id";

$result = mysqli_query($con, $sql) or die("Query unsuccesfull");

mysqli_close($con);

header("location: index.php");

}

?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
