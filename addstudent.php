<?php
	include "menu.php";
	
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">School MGT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $unm; ?></a>
        </div>
      </div>
      
	  

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="home.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
		  <li class="nav-item menu-open">
            <a href="addstudent.php" class="nav-link">
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>
                Add Student
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
	</nav>
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
		<p class="h3">Add Student</p>
        <form action="addstudent.php" method="POST">
			<input type="text" name="txtsnm" placeholder="Enter Student Name" class="form-control mt-1" required>
			<select name="course" class="form-control mt-1">
				<option value="BCA">BCA</option>
				<option value="BSCIT">BSCIT</option>
			</select>
			<input type="text" name="txtmob" placeholder="Enter Mobile Number" class="form-control mt-1" maxlength="10" required>
			<input type="text" name="txtpmob" placeholder="Enter Parents Mobile Number" class="form-control mt-1" maxlength="10" required>
			<input type="date" name="dob" class="form-control mt-1" required>
			<input type="submit" value="Submit" class="btn btn-primary w-100 mt-1">
		</form>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
	<?php
		// include "config.php";
		if(isset($_POST['txtsnm']))
		{
			$snm = $_POST['txtsnm'];
			$course = $_POST['course'];
			$mob = $_POST['txtmob'];
			$pmob = $_POST['txtpmob'];
			$dob = $_POST['dob'];
			$addedby = $_SESSION['admin'];
			$sql = "insert into `student`(`student_name`,`class`,`mobile`,`parents_mobile`,`dob`,`added_by`) values('$snm','$course','$mob','$pmob','$dob','$addedby')";
			$res = mysqli_query($con,$sql);
		}
	?>
	<table class="table table-sm table-bordered">
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Course</th>
			<th>Mobile</th>
			<th>D.O.B.</th>
		</tr>
		<?php
			$sql = "select * from `student`";
			$res = mysqli_query($con,$sql);
			$i = 0;
			while($rows = mysqli_fetch_assoc($res))
			{
				$i++;
				?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $rows['student_name']; ?></td>
						<td><?php echo $rows['class']; ?></td>
						<td><?php echo $rows['mobile']; ?></td>
						<td><?php echo $rows['dob']; ?></td>
					</tr>
				<?php
			}
		?>
	</table>

    
	