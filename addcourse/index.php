<?php
include "config.php";
if (isset($_POST['txtcourse'])) {
    $course = $_POST['txtcourse'];
    $sql = "SELECT * FROM course WHERE cname='$course'";
    $res = mysqli_query($con, $sql);
    $count = mysqli_num_rows($res);
    if ($count == 0) {
        $sql = "INSERT INTO course(`cname`) VALUES('$course') ";
        $res = mysqli_query($con, $sql);

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
                Duplicate Entry!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
<?php
    }
}
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<div class="container">
    <form action="addcourse.php" method="POST">
        <input type="text" name="txtcourse" class="form-control mt-2 mb-2" placeholder="Enter Course Name" required>
        <input type="submit" value="Submit" class="btn btn-primary w-100">
    </form>
</div>

<div class="container">
    <table width="100%" class="table table-striped table-bordered mt-4 text-center">
        <tr>
            <th>#</th>
            <th>Course</th>
            <th>Operations</th>
        </tr>


        <?php
        $sql = "SELECT * FROM course";
        $res = mysqli_query($con, $sql);
        $i = 0;
        while ($row = mysqli_fetch_assoc($res)) {
            $i++;
        ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['cname']; ?></td>
                <td>
                    <!-- <i style="cursor: pointer;" class="fas fa-pen text-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-sname="<?php echo $rows['student_name']; ?>" data-bs-mob="<?php echo $rows['mobile']; ?>" data-bs-pmob="<?php echo $rows['parents_mobile']; ?>" data-bs-dob="<?php echo $rows['dob']; ?>" data-bs-course="<?php echo $rows['class']; ?>" data-bs-id="<?php echo $rows['id']; ?>"></i>
                    &nbsp;&nbsp; -->
                    <div class="btn btn-primary ms-3" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-id="<?php echo $row['ID']; ?>" data-bs-course="<?php echo $row['cname']; ?>">Update</div>
                    <a href="deletecourse.php?id=<?php echo $row['ID']; ?>" class="btn btn-danger ms-3">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>

    </table>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="addcourse.php" method="POST">
                    <div class="mb-3">
                        <input type="text" id="txtid" name="txtid" hidden>
                        <input type="text" class="form-control" id="course1" name="course1">
                        <button type="submit" class="btn btn-primary w-100 mt-2" name="btn">Edit Student</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        console.log("ready!");
    });
    var exampleModal = document.getElementById('exampleModal')
    exampleModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget
        var course = button.getAttribute('data-bs-course')
        var id = button.getAttribute('data-bs-id')
        var modalTitle = exampleModal.querySelector('.modal-title')

        modalTitle.textContent = 'EDIT :  ' + course;
        document.getElementById("course1").value = course;
        document.getElementById("txtid").value = id;
    })
</script>
<?php
if (isset($_POST['course1'])) {
    $course1 = $_POST['course1'];
    $nid = $_POST['txtid'];
    $sql = "update `course` set `cname`='$course1' where `id`='$nid'";
    //echo $sql;
    if ($result = mysqli_query($con, $sql)) {
        echo "<meta http-equiv='refresh' content='0'>";
    }
}
?>