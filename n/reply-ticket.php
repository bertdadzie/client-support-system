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
$query = "SELECT *, (SELECT first_name FROM `supportagents` p2 WHERE p1.supportAgents_id = p2.supportAgents_id) supportagent1, (SELECT last_name FROM `supportagents` p2 WHERE p1.supportAgents_id = p2.supportAgents_id) supportagent2, (SELECT image FROM `supportagents` p2 WHERE p1.supportAgents_id = p2.supportAgents_id) supportagent3 FROM ticket_replies p1 where ticket_id=$mid";
$result1 = mysqli_query($con, $query);
$data = mysqli_fetch_assoc($result1);
 $selectReply .= '
  <div class="box bg-light-inverse">"'.$data["replies"].'"</div>
 ';


  $sql = "SELECT *, (SELECT first_name FROM `supportagents` p2 WHERE p1.supportAgents_id = p2.supportAgents_id) first_name, (SELECT last_name FROM `supportagents` p2 WHERE p1.supportAgents_id = p2.supportAgents_id) supportagent2, (SELECT image FROM `supportagents` p2 WHERE p1.supportAgents_id = p2.supportAgents_id) image FROM ticket_replies p1  where ticket_id = $mid";
    require('config/dbconfig.php');
    $replyResult = mysqli_query($con, $sql);
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
                                                <a href="index.php?n=ticket"> <i class="mdi mdi-email"></i> All Ticket </a>
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
                                                Priority: <span class="label label-info"> <?php echo $row['priority1']; ?></span> <a href='javascript:void(0)' data-toggle='modal' data-target='#myModal' class='btn btn-info text-white'>Change</a>
                                            </li>
                                            <li class="list-group-item">
                                                Department: <span class="label label-info"> <?php echo $row['department1']; ?></span><a href='javascript:void(0)' data-toggle='modal' data-target='#department' class='btn btn-info text-white'>Change</a>
                                            </li>
                                            <li class="list-group-item">Status:
                                            <?php  if($row['status_id'] == 0){
                                                    echo "<td><span class='label label-inverse'>Pending</span><a href='javascript:void(0)' data-toggle='modal' data-target='#status' class='btn btn-info text-white'>Change</a></td>";
                                                }
                                                else if($row['status_id'] ==4) {
                                                    echo"<td><span class='label label-success'>Solved</span><a href='javascript:void(0)' data-toggle='modal' data-target='#status' class='btn btn-info text-white'>Change</a></td>";
                                                }
                                                else if($row['status_id'] ==1) {
                                                    echo"<td><span class='label label-warning'>Open</span><a href='javascript:void(0)' data-toggle='modal' data-target='#status' class='btn btn-info text-white'>Change</a></td>";
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
                                        <div id="result"></div>
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
                                        <?php   while($datReply = mysqli_fetch_assoc($replyResult)){
                                             echo'
                                                <li class="reverse">  
                                                   <div class="chat-content">
                                                     <h5>"'.$datReply["first_name"].'"</h5>
                                                    <div class="box bg-light-inverse">"'.$datReply["replies"].'"</div>
                                                    </div>
                                                    <div class="chat-img"><img src="'.$datReply["image"].'" alt="user" /></div>
                                                    <div class="chat-time">"'.$datReply["date"].'"</div> 
                                                </li>';
                                             }?>
                                        </ul>
                                    </div>
                                    <div class="card-body b-t">
                                        <form method="post" action="index.php?n=replies_action">
                                        <div class="row">
                                            <div class="col-8">
                                                <input type="hidden" name="ticket_id"  value="<?php echo $mid; ?>">
                                                <input type="hidden" name="date"  value="<?php echo $date; ?>">
                                                <input type="hidden" name="supportAgents_id"  value="<?php echo $_SESSION['ID']; ?>">
                                                <textarea class="form-control" name="replies"  rows="15" placeholder="Enter text ..."></textarea>
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

                                    <?php  $priority = '';
                                    $query = "SELECT * FROM priority GROUP BY priority_name ORDER BY priority_name ASC";
                                    $result = mysqli_query($con, $query);
                                    while($priorityrow = mysqli_fetch_array($result))
                                    {
                                     $priority .= '<option value="'.$priorityrow["priority_id"].'">'.$priorityrow["priority_name"].'</option>';
                                    }?>

                                        <div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Robert</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="form-horizontal" action="index.php?n=update-priority"method="post">
                                                            <div class="form-group">
                                                                <label class="col-md-12">Select Number of people</label>
                                                                <div class="col-md-12">
                                                                    <select class="select2 form-control custom-select" name="priority_id" style="width: 100%; height:36px;">
                                                                     <?php echo  $priority;?>
                                                                            </select> 
                                                                    <input type="hidden" name="ticket_id"  value="<?php echo $mid; ?>">
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" name="priority" class="btn btn-info waves-effect">Save</button>
                                                        <button type="submit" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                    </form>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>



                                                                            <?php $dept_name = '';
                                    $query = "SELECT * FROM department GROUP BY dept_name ORDER BY dept_name ASC";
                                    $result = mysqli_query($con, $query);
                                    while($row = mysqli_fetch_array($result))
                                    {
                                     $dept_name .= '<option value="'.$row["dept_id"].'">'.$row["dept_name"].'</option>';
                                    }?>

                                        <div id="department" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Add Lable</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="form-horizontal" action="index.php?n=update-department"method="post">
                                                            <div class="form-group">
                                                                <label class="col-md-12">Select Number of people</label>
                                                                <div class="col-md-12">
                                                                    <select class="select2 form-control custom-select" name="dept_id" style="width: 100%; height:36px;">
                                                                     <?php echo  $dept_name;?>
                                                                            </select>
                                                                     <input type="hidden" name="ticket_id"  value="<?php echo $mid; ?>"> 
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" name="department" class="btn btn-info waves-effect">Save</button>
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                                </form>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>


                                        <?php $status_name = '';
                                    $query = "SELECT * FROM status GROUP BY status_name ORDER BY status_name ASC";
                                    $result = mysqli_query($con, $query);
                                    while($row = mysqli_fetch_array($result))
                                    {
                                     $status_name .= '<option value="'.$row["status_id"].'">'.$row["status_name"].'</option>';
                                    }?>

                                        <div id="status" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Add Lable</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="form-horizontal" action="index.php?n=update-status"method="post">
                                                            <div class="form-group">
                                                                <label class="col-md-12">Select Number of people</label>
                                                                <div class="col-md-12">
                                                                    <select class="select2 form-control custom-select" name="status_id" style="width: 100%; height:36px;">
                                                                     <?php echo  $status_name;?>
                                                                            </select> 
                                                                    <input type="hidden" name="ticket_id"  value="<?php echo $mid; ?>"> 
                                                                </div>
                                                            </div>
                                                        
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-info waves-effect" name="status">Save</button>
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                                </form>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>






            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->