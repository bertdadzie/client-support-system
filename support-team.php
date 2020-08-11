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
                    <h3 class="text-themecolor">Mailbox</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Apps</li>
                        <li class="breadcrumb-item active">mailbox</li>
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-xlg-2 col-lg-3 col-md-4">
                                    <div class="card-body inbox-panel"><a href="add-support-agent.php" class="btn btn-danger m-b-20 p-10 btn-block waves-effect waves-light">Add Team member</a>
                                         <ul class="list-group list-group-full">
                                            <li class="list-group-item">
                                                <a href="ticket.php"> <i class="mdi mdi-star"></i> All Ticket </a>
                                            </li>
                                            <li class="list-group-item">
                                            <a href="support-team.php"> <i class="mdi mdi-account"></i> Support team</a>
                                            </li>
                                            <li class="list-group-item">
                                            <a href="feedbacks"> <i class="mdi mdi-comment"></i> Feedbacks</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xlg-10 col-lg-9 col-md-8 bg-light-part b-l">
                        
                            <div class="card-body">
                                <h4 class="card-title">Support Team</h4>
                                <div class="table-responsive">
                                    <table id="ticket" class="table m-t-30 table-hover no-wrap contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th>Nmae</th>
                                                <th>Email</th>
                                                <th>Telepone</th>
                                                <th>Role</th>
                                                <th>department</th>
                                                <th>Gender</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                             <?php
                            $sql = "SELECT *, (SELECT role_name FROM role p2 WHERE p1.role_id = p2.role_id) role1, (SELECT dept_name FROM department p3 WHERE p1.dept_id = p3.dept_id) department1 FROM supportagents p1";
                            require('config/dbconfig.php');
                            $result = mysqli_query($con, $sql);
                            while($data = mysqli_fetch_assoc($result)){
                                $mid = $data['supportAgents_id'];
                                $path = $data['image'];
                                            echo"
                                            <tr>
                                                <td>
                                                    <a href='javascript:void(0)'><img src='$path' alt='user' class='img-circle' />".$data['first_name']." ".$data['last_name']."</a>
                                                </td>
                                                <td>".$data['email']."</td>
                                                <td>".$data['phone_number']."</td>
                                                <td><span class='label label-inverse'>".$data['role1']."</span></td>
                                                <td>".$data['department1']."</td>
                                                <td>".$data['gender']."</td>
                                                <td>
                                                    <a href='profile.php?&mid=$mid' class='btn btn-sm btn-icon btn-pure btn-outline delete-row-btn' data-toggle='tooltip' data-original-title='Delete'><i class='ti-more' aria-hidden='true'></i></a>
                                                </td>
                                            </tr>";  
                                                }
                                            ?> 
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="6">
                                                    <div class="text-right">
                                                        <ul class="pagination"> </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                  






                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <!-- This is data table -->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    
    <!-- end - This is for export functionality only -->
    <script>
    $(document).ready(function() {
        $('#ticket').DataTable({

        });  
    });

    </script>
</body>


<!-- Mirrored from themedesigner.in/demo/admin-press/mini-sidebar/app-email.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Aug 2020 10:37:37 GMT -->
</html>
