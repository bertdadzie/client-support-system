<?php 
    $mid = $_GET['mid'];
    $midd = $_SESSION['ID'];
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


$selectReply = '';
$query = "SELECT * FROM `ticket_replies` where ticket_id=$mid and supportAgents_id = $midd";
$result1 = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result1);
 $selectReply .= '
  <div class="box bg-light-inverse">"'.$data["replies"].'"</div>
 ';
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
                                    <div class="card-body inbox-panel">
                                        <ul class="list-group list-group-full">
                                            <li class="list-group-item active"> <a href="javascript:void(0)">Tickeck Info </a></li>
                                            <li class="list-group-item">
                                                <a href="ticket.php">Created on: <span class="label label-info"> <?php echo $row['ticket_date']; ?></span> </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="ticket.php">last Replied: <span class="label label-info"> <?php echo $data['date']; ?></span> </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="ticket.php">Priority: <span class="label label-info"> <?php echo $row['priority1']; ?></span> </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="ticket.php">Department: <span class="label label-info"> <?php echo $row['department1']; ?></span> </a>
                                            </li>
                                            <li class="list-group-item">Status:
                                            <?php  if($row['status_id'] == 0){
                                                    echo "<td><span class='label label-inverse'>Pending</span><span>Change</span></td>";
                                                }
                                                else if($row['status_id'] ==1) {
                                                    echo"<td><span class='label label-success'>Solved</span><span>Change</span></td>";
                                                }
                                                else if($row['status_id'] ==2) {
                                                    echo"<td><span class='label label-warning'>Open</span><a href='index.php?n=ticket'>Change</a></td>";
                                                } ?>
                                                       
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xlg-10 col-lg-9 col-md-8 bg-light-part b-l">
                                 

                                 <!-- .chat-right-panel -->
                                <div class="chat-right-aside">
                                    <div class="chat-main-header">
                                        <div class="p-20 b-b">
                                            <h3 class="box-title">Reply ticket</h3>
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
                                              <h5><?php echo $_SESSION['FIRST-NAME'].' '. $_SESSION['LAST-NAME'];?></h5>
                                              <?php echo $selectReply;?>
                                              </div>
                                              <div class="chat-img"><img src="<?php echo $_SESSION['IMAGE']; ?>" alt="user" /></div>
                                              <div class="chat-time"><?php echo $date; ?></div> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body b-t">
                                        <form action="index.php?n=replies_action&mid=$mid" method="post">
                                        <div class="row">
                                            <div class="col-8">
                                                <input type="hidden" name="ticket_id" value="<?php echo $mid; ?>">
                                                <input type="hidden" name="date" value="<?php echo $date; ?>">
                                                <input type="hidden" name="supportAgents_id" value="<?php echo $_SESSION['ID']; ?>">
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