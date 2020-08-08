<?php 
require('config/dbconfig.php');
$role_name = '';
$query = "SELECT * FROM role GROUP BY role_name ORDER BY role_name ASC";
$result = mysqli_query($con, $query);
while($row = mysqli_fetch_array($result))
{
 $role_name .= '<option value="'.$row["role_id"].'">'.$row["role_name"].'</option>';
}

$dept_name = '';
$query = "SELECT * FROM department GROUP BY dept_name ORDER BY dept_name ASC";
$result = mysqli_query($con, $query);
while($row = mysqli_fetch_array($result))
{
 $dept_name .= '<option value="'.$row["dept_id"].'">'.$row["dept_name"].'</option>';
}
?>




<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themedesigner.in/demo/admin-press/mini-sidebar/app-email.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Aug 2020 10:37:37 GMT -->
<?php include'includes/head.php' ?>

<body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php include('includes/navbar.php'); ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
       <aside class="left-sidebar">
          <?php include('includes/sidebar.php'); ?>
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Compose</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Inbox</li>
                        <li class="breadcrumb-item active">Compose</li>
                    </ol>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="">
                    <div class="login-box card">
                        <div class="card-body">
                            <form class="form-horizontal form-material" action="clientAction.php" method="post" enctype="multipart/form-data">
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="text" name="first_name"  placeholder="First Name"> </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="text" name="last_name"  placeholder="Last Name"> </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="text" name="phone_number"  placeholder="Phone number"> </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="email" name="email"  placeholder="Email"> </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="password" name="password"  placeholder="Password"> </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="text" name="address"  placeholder="Address"> </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <select class="select2 form-control custom-select" name="role_id" style="width: 100%; height:36px;">
                                    <option selected disabled value="">Assign Role</option>
                                     <?php echo $role_name;?>
                                            </select> </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <select class="select2 form-control custom-select" name="dept_id" style="width: 100%; height:36px;">
                                   <option selected disabled value="">Department</option>
                                     <?php echo $dept_name;?>
                                            </select> </div>
                                </div>

                                <div class="form-group ">
                                    <div class="col-xs-12">
                                       <label for="inputPassword4">Gender</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineCheckbox1" value="male" name="gender">
                                            <label class="form-check-label" for="inlineCheckbox1">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineCheckbox2" value="female" name="gender">
                                            <label class="form-check-label" for="inlineCheckbox2">Female</label>
                                        </div> 
                                    </div>
                                </div>


                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input name="image" type="file" multiple />
                                    </div>
                                </div>

                                <div class="form-group text-center m-t-20">
                                    <div class="col-xs-12">
                                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit" value="submit">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2019 Admin Press Admin by themedesigner.in
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
     <?php include('includes/js.php') ?>

    <script>
    $(document).ready(function() {

        $('.textarea_editor').wysihtml5();

    });
    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
</body>


<!-- Mirrored from themedesigner.in/demo/admin-press/mini-sidebar/app-compose.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Aug 2020 10:38:16 GMT -->
</html>
