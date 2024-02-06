<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>

    <?php
        $con = mysqli_connect("localhost","root","","crud") or die("Connection did not established successfully");

        $sql = "select * from student JOIN studentclass on student.sclass = studentclass.cid";

        $result = mysqli_query($con, $sql) or die("Query unsuccesfull");

        if(mysqli_num_rows($result) > 0){

    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php

                while($row = mysqli_fetch_assoc($result)){

            ?>
            <tr>
                <td><?php echo $row['sid'] ?></td>
                <td><?php echo $row['sname'] ?></td>
                <td><?php echo $row['saddress'] ?></td>
                <td><?php echo $row['cname'] ?></td>
                <td><?php echo $row['sphone'] ?></td>
                <td>
                    <a href='edit.php?sid=<?php echo $row['sid'] ?>'>Edit</a>
                    <a href='delete-inline.php?sid=<?php echo $row['sid'] ?>'>Delete</a>
                </td>
            </tr>
          <?php  } ?>
        </tbody>
    </table>
    <?php  }else{
        echo "<h2>No Data Exists</h2>";
    }
    mysqli_close($con);
    ?>
</div>
</div>
</body>
</html>
