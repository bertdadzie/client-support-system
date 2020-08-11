<?php
    $mid = $_GET['mid'];
    $sql = "SELECT *, 
(SELECT status_name FROM status p2 
    WHERE p1.status_id = p2.status_id) status1, 
(SELECT priority_name FROM priority p3 
    WHERE p1.priority_id = p3.priority_id) priority1, 
(SELECT dept_name FROM department p4 
    WHERE p1.dept_id = p4.dept_id) department1
        FROM ticket p1 where ticket_id=$mid";
    require('config/dbconfig.php');
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    $date= date("Y-m-d");
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
                    <h3 class="text-themecolor">Reply Ticket</h3>
                </div>
                <div class="col-md-7 align-self-center">
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
                                    <div class="card-body inbox-panel">
                                        <a href="add-ticket.php" class="btn btn-danger m-b-20 p-10 btn-block waves-effect waves-light">Add Ticket</a>
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
                                    <div class="card-body inbox-panel">
                                        <ul class="list-group list-group-full">
                                            <li class="list-group-item active"> <a href="javascript:void(0)">Tickeck Info </a></li>
                                            <li class="list-group-item">
                                                <a href="ticket.php">Created on: <span class="label label-info"> <?php echo $row['ticket_date']; ?></span> </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="ticket.php">last Replied: <span class="label label-info"> <?php echo $row['ticket_date']; ?></span> </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="ticket.php">Priority: <span class="label label-info"> <?php echo $row['priority1']; ?></span> </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="ticket.php">Department: <span class="label label-info"> <?php echo $row['department1']; ?></span> </a>
                                            </li>
                                            <li class="list-group-item">Status:
                                            <?php  if($row['status_id'] == 0){
                                                    echo "<td><span class='label label-inverse'>Pending</span></td>";
                                                }
                                                else if($row['status_id'] ==1) {
                                                    echo"<td><span class='label label-success'>Solved</span></td>";
                                                }
                                                else if($row['status_id'] ==2) {
                                                    echo"<td><span class='label label-warning'>Open</span></td>";
                                                } ?>
                                                       
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body inbox-panel">
                                        <ul class="list-group list-group-full">
                                            <li class="list-group-item active"> <a href="javascript:void(0)">Update Ticket</a></li>
                                            <li class="list-group-item">
                                                <a href="#" data-toggle="modal" data-target="#add-contact"> <i class="mdi mdi-star"></i> Change Status</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#" data-toggle="modal" data-target="#add-contact"> <i class="mdi mdi-send"></i> change priority </a><span class="badge badge-danger ml-auto">3</span></li>
                                            <li class="list-group-item ">
                                                <a href="javascript:void(0)"> <i class="mdi mdi-file-document-box"></i> Assign tickect </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="javascript:void(0)"> <i class="mdi mdi-delete"></i> Trash </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xlg-10 col-lg-9 col-md-8 bg-light-part b-l">
                                 

                                 <!-- .chat-right-panel -->
                                <div class="chat-right-aside">
                                    <div class="chat-main-header">
                                        <div class="p-20 b-b">
                                            <h3 class="box-title">Chat Message</h3>
                                        </div>
                                    </div>
                                    <div class="chat-rbox">
                                        <ul class="chat-list p-20">
                                            <!--chat Row -->
                                            <li>
                                                <div class="chat-img"><img src="assets/images/users/2.jpg" alt="user" /></div>
                                                <div class="chat-content">
                                                    <h5><?php echo $row['first_name']." ".$row['last_name']; ?></h5>
                                                    <div class="box bg-light-info"><?php echo $row['ticket_description']; ?></div>
                                                </div>
                                                <div class="chat-time">10:57 am</div>
                                            </li>
                                            <!--chat Row -->
                                            <li class="reverse">
                                                
                                                <div class="chat-content">
                                                    <h5>Steave Doe</h5>
                                                    <div class="box bg-light-inverse">It’s Great opportunity to work.</div>
                                                </div>
                                                <div class="chat-img"><img src="assets/images/users/5.jpg" alt="user" /></div>
                                                <div class="chat-time">10:57 am</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body b-t">
                                        <form action="replies_action.php" method="post">
                                        <div class="row">
                                            <div class="col-8">
                                                <input type="hidden" name="ticket_id" value="<?php echo $mid; ?>">
                                                <input type="hidden" name="date" value="<?php echo $date; ?>">
                                                <textarea class="form-control" name="replies" rows="15" placeholder="Enter text ..."></textarea>
                                            </div>
                                            <div class="col-4 text-right">
                                                <button type="submit" class="btn btn-info btn-circle btn-lg"><i class="fa fa-paper-plane-o"></i> </button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- .chat-right-panel -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



                                                <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel">Add New Contact</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <from class="form-horizontal form-material">
                                                                        <div class="form-group">
                                                                            <div class="col-md-12 m-b-20">
                                                                                <input type="text" class="form-control" placeholder="Type name"> </div>
                                                                            <div class="col-md-12 m-b-20">
                                                                                <input type="text" class="form-control" placeholder="Email"> </div>
                                                                            <div class="col-md-12 m-b-20">
                                                                                <input type="text" class="form-control" placeholder="Phone"> </div>
                                                                            <div class="col-md-12 m-b-20">
                                                                                <input type="text" class="form-control" placeholder="Designation"> </div>
                                                                            <div class="col-md-12 m-b-20">
                                                                                <input type="text" class="form-control" placeholder="Age"> </div>
                                                                            <div class="col-md-12 m-b-20">
                                                                                <input type="text" class="form-control" placeholder="Date of joining"> </div>
                                                                            <div class="col-md-12 m-b-20">
                                                                                <input type="text" class="form-control" placeholder="Salary"> </div>
                                                                            <div class="col-md-12 m-b-20">
                                                                                <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Contact Image</span>
                                                                                    <input type="file" class="upload"> </div>
                                                                            </div>
                                                                        </div>
                                                                    </from>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Save</button>
                                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                                </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
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
