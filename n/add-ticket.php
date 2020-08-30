<?php
require('config/dbconfig.php');
$supportagents = '';
$query = "SELECT * FROM supportagents GROUP BY first_name ORDER BY first_name ASC";
$result = mysqli_query($con, $query);
while($row = mysqli_fetch_array($result))
{
 $supportagents .= '<option value="'.$row["supportAgents_id"].'">'.$row["first_name"].' '.$row["last_name"].'</option>';
}

$dept_name = '';
$query = "SELECT * FROM department GROUP BY dept_name ORDER BY dept_name ASC";
$result = mysqli_query($con, $query);
while($row = mysqli_fetch_array($result))
{
 $dept_name .= '<option value="'.$row["dept_id"].'">'.$row["dept_name"].'</option>';
}

$priority = '';
$query = "SELECT * FROM priority GROUP BY priority_name ORDER BY priority_name ASC";
$result = mysqli_query($con, $query);
while($row = mysqli_fetch_array($result))
{
 $priority .= '<option value="'.$row["priority_id"].'">'.$row["priority_name"].'</option>';
}

$date= date("Y-m-d");
date("h:i:sa")
$ticketNumber = rand(1000,9999); 
?>
                
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-xlg-2 col-lg-3 col-md-4 ">
                                    <div class="card-body inbox-panel">
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
                                    <div class="card-body">
                                        <h3 class="card-title">Add Ticket</h3>
                                        <form action="index.php?n=ticketAction" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input class="form-control" name="first_name" placeholder="First Name:">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="last_name" placeholder="Last Name:">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="email" placeholder="Email:">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="phone" placeholder="Phone Number:">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="address" placeholder="Adress:">
                                        </div>
                                         <div class="form-group">
                                            <input class="form-control" name="Subject" placeholder="Subject:">
                                            <input type="hidden" name="ticket_number" value="<?php echo $ticketNumber; ?>">
                                            <input type="hidden" name="ticket_date" value="<?php echo $date; ?>">
                                        </div>
                                        <div class="form-group">
                                            <div class="btn btn-inverse m-t-20">
                                        <select class="select2 form-control custom-select" name="support_id" style="width: 100%; height:36px;">
                                    <option selected disabled value="">Department</option>
                                     <?php echo $dept_name;?>
                                            </select> 
                                        </div>

                                        <div class="btn btn-inverse m-t-20">
                                        <select class="select2 form-control custom-select" name="dept_id" style="width: 100%; height:36px;">
                                    <option selected disabled value="">Assign Agents</option>
                                     <?php echo  $supportagents;?>
                                            </select> 
                                        </div>

                                        <div class="btn btn-inverse m-t-20">
                                        <select class="select2 form-control custom-select" name="priority_id" style="width: 100%; height:36px;">
                                     <option selected disabled value="">Priority</option>
                                     <?php echo  $priority;?>
                                            </select> 
                                        </div>
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" name="ticket_description" rows="15" placeholder="Enter text ..."></textarea>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <label for="input-file-now-custom-1">Attachment</label>
                                                <input type="file" id="input-file-now-custom-1" class="dropify" name="attachment" data-default-file="assets/plugins/dropify/src/images/test.jpg" />
                                            </div>
                                      </div>
                                        <button type="submit" class="btn btn-success m-t-20"><i class="fa fa-envelope-o"></i> Send</button>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->