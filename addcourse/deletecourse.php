<?php
include "config.php";
$id = $_GET['id'];
$sql = "DELETE FROM course WHERE id='$id'";
if($res = mysqli_query($con, $sql)) {
    header("location:addcourse.php");
}
?>