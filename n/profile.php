<?php
include('session.php');
      include('sec.php');
    $mid = $_SESSION['ID'];
    $sql = "SELECT *, (SELECT role_name FROM role p2 WHERE p1.role_id = p2.role_id) role1, (SELECT dept_name FROM department p3 WHERE p1.dept_id = p3.dept_id) department1 FROM supportagents p1 where supportAgents_id =$mid";
    require('config/dbconfig.php');
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
?>
                
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-xlg-2 col-lg-3 col-md-4">
                                    <div class="card-body inbox-panel">
                                       <div class="text-center">
                                          <a href="#"><img src="<?php echo $_SESSION['IMAGE']; ?>" alt="user" class="img-circle img-responsive"></a>
                                       </div>
                                       <ul class="list-group list-group-full">
                                            <li class="list-group-item">
                                                <a href="index.php?n=ticket"> <i class="mdi mdi-account"></i> <?php echo $_SESSION['FIRST-NAME'].' '. $_SESSION['LAST-NAME'];?></a>
                                            </li>
                                        </ul>
                                       <hr>
                                    </div>
                                    <div class="card-body inbox-panel">
                                         <a href="index.php?n=add-ticket" class="btn btn-danger m-b-20 p-10 btn-block waves-effect waves-light">Add Ticket</a>
                                        <ul class="list-group list-group-full">
                                            <li class="list-group-item">
                                                <a href="index.php?n=ticket"> <i class="mdi mdi-star"></i> All Ticket </a>
                                            </li>
                                            <li class="list-group-item">
                                            <a href="index.php?n=support-team"> <i class="mdi mdi-account"></i> Support team</a>
                                            </li>
                                            <li class="list-group-item">
                                            <a href="index.php?n=feedbacks"> <i class="mdi mdi-comment"></i> Feedbacks</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xlg-10 col-lg-9 col-md-8 bg-light-part b-l">
                                 

                                 <!-- .chat-right-panel -->
                                <div class="chat-right-aside">
                                    <!--second tab-->
                                <div class="tab-pane" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $_SESSION['EMAIL']; ?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $_SESSION['EMAIL']; ?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Address</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $_SESSION['EMAIL']; ?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Department</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $_SESSION['EMAIL']; ?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div>
                                </div>
                                </div>
                                <!-- .chat-right-panel -->
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
