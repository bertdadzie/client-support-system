<?php
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
                                            <li class="list-group-item">
                                                <a href="index.php?n=ticket"> <i class="mdi mdi-account"></i> <?php echo $_SESSION['Gender']; ?></a>
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
                                            <div class="col-md-3 col-xs-4 b-r"> <strong>Mobile</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $_SESSION['TELEPHONE']; ?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-4 b-r"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $_SESSION['EMAIL']; ?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-4 b-r"> <strong>Address</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $_SESSION['Address']; ?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-4 b-r"> <strong>Department</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $_SESSION['dept']; ?></p>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                    <p>
<?php
   
   if($_SESSION['unseen']) {
      $_SESSION['unseen'] += 1;
   }else {
      $_SESSION['unseen'] = 1;
   }
    
   $msg = "You have visited this page ".  $_SESSION['unseen'];
   $msg .= "in this session.";
   echo $msg;
?></p><p><?php
   setcookie("name", "John Watkin", time()+3600, "/","", 0);
   setcookie("age", "36", time()+3600, "/", "",  0);
  echo "Set Cookies";
?></p>
                                </div>
                                </div>
                                <!-- .chat-right-panel -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
