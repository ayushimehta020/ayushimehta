<?php
include "config.php";
if (isset($_POST['txtenr'])) {
    $enr = $_POST['txtenr'];
    $name = $_POST['txtnm'];
    $email = $_POST['txtmail'];
    $pwd = $_POST['txtpwd'];
    $mobile = $_POST['txtmob'];
    $course = $_POST['txtcourse'];
    $sql = "INSERT INTO `stud`(`enr`,`name`,`email`,`password`,`contact`,`course`) VALUES('$enr','$name','$email','$pwd','$mobile','$course')";
    $res = mysqli_query($con, $sql);
    if ($res) {
?>
        <div class="container mt-2">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Record Inserted Successfully!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    <?php
    } else {
    ?>
        <div class="container mt-2">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Record Not Inserted!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
<?php
    }
}
?>

<div class="container bg-dark text-light w-50 mt-2 border border-dark rounded-2 p-3">
    <img src="add-student.png" alt="Add student" class="d-block mx-auto mb-4" style="height: 200px">
    <form action="index.php" method="POST">
        <div class="row align-items-center mt-2">
            <div class="col-2">
                <label for="txtenr" class="col-form-label">Enrollment No.</label>
            </div>
            <div class="col-10">
                <input type="number" name="txtenr" id="txtenr" class="form-control" placeholder="Enter enrollment number" aria-describedby="Enrollment number">
            </div>
        </div>
        <div class="row align-items-center mt-2">
            <div class="col-2">
                <label for="txtnm" class="col-form-label">Name</label>
            </div>
            <div class="col-10">
                <input type="text" name="txtnm" id="txtnm" class="form-control" placeholder="Enter name" aria-describedby="Name" required>
            </div>
        </div>
        <div class="row align-items-center mt-2">
            <div class="col-2">
                <label for="txtmail" class="col-form-label">Email</label>
            </div>
            <div class="col-10">
                <input type="email" name="txtmail" id="txtmail" class="form-control" placeholder="Enter email" aria-describedby="Email" required>
            </div>
        </div>
        <div class="row align-items-center mt-2">
            <div class="col-2">
                <label for="txtpwd" class="col-form-label">Password</label>
            </div>
            <div class="col-10">
                <input type="password" name="txtpwd" id="txtpwd" class="form-control" placeholder="Enter password" aria-describedby="Password" required>
            </div>
        </div>
        <div class="row align-items-center mt-2">
            <div class="col-2">
                <label for="txtmob" class="col-form-label">Contact No.</label>
            </div>
            <div class="col-10">
                <input type="number" name="txtmob" id="txtmob" class="form-control" placeholder="Enter contact number" aria-describedby="Contact number" required>
            </div>
        </div>
        <div class="row align-items-center mt-2">
            <div class="col-2">
                <label for="txtcourse" class="col-form-label">Course</label>
            </div>
            <div class="col-10">
                <select name="txtcourse" id="txtcourse" class="form-select" required>
                    <option value="">-- SELECT COURSE --</option>
                    <option value="BSCIT">BSCIT</option>
                    <option value="BCA">BCA</option>
                    <option value="BBA">BBA</option>
                    <option value="BCom">BCom</option>
                    <option value="PGDCA">PGDCA</option>
                </select>
            </div>
        </div>
        <hr>
        <div class="row mt-4">
            <div class="col-6">
                <input type="submit" value="Submit" class="btn btn-primary w-100">
            </div>
            <div class="col-6">
                <input type="reset" value="Reset" class="btn btn-danger w-100">
            </div>
        </div>
        <a href="search.php" class="btn btn-warning w-100 mt-2">Search Student</a>
    </form>
</div>