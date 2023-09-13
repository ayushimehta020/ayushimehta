<?php
    include "config.php";
    $enr = $_POST['enr'];
    $sql = "SELECT * FROM `stud` WHERE `enr`='$enr'";
    $res = mysqli_query($con, $sql);
    echo "<table class='table table-bordered table-dark text-center mt-2'><tr><th>Enr.</th><th>Name</th><th>Email</th><th>Password</th><th>Contact</th><th>Course</th></tr>";
    while ($row = mysqli_fetch_assoc($res))
    {
        echo "<tr><td>" . $row['enr'] . "</td><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['password'] . "</td><td>" . $row['contact'] . "</td><td>" . $row['course'] . "</td></tr></table>";
    }
?>