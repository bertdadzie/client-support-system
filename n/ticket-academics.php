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
                                </div>
                                <div class="col-xlg-10 col-lg-9 col-md-8 bg-light-part b-l">
                        
                                <?php
                                    $sql = "SELECT *,count(status_id) as status FROM `ticket` GROUP BY status_id";
                                    require('config/dbconfig.php');
                                    $result = mysqli_query($con, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                ?>
                            <div class="card-body">
                                <h4 class="card-title">Support Ticket List</h4>
                                <div class="table-responsive">
                                    <table id="ticket" class="table m-t-30 table-hover no-wrap contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th>Ticket #</th>
                                                <th>Client Name</th>
                                                <th>Client Email</th>
                                                <th>Sbuject</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                             <?php
                            $sql = "select * from ticket where dept_id=3";
                            require('config/dbconfig.php');
                            $result = mysqli_query($con, $sql);
                            while($data = mysqli_fetch_assoc($result)){
                                $mid = $data['ticket_id'];
                                // $path = $data['image'];
                                            echo"
                                            <tr>
                                                <td>".$data['ticket_number']."</td>
                                                <td>
                                                    <a href='index.php?n=reply-ticket&mid=$mid'>".$data['first_name']." ".$data['last_name']."</a>
                                                </td>
                                                <td><a href='index.php?n=reply-ticket&mid=$mid'>".$data['email']."</a></td>
                                                <td><a href='index.php?n=reply-ticket&mid=$mid'>".$data['Subject']."</a></td>";
                                                if($data['status_id'] == 0){
                                                    echo "<td><a href='index.php?n=reply-ticket&mid=$mid'><span class='label label-inverse'>Pending</span></a></td>";
                                                }
                                                else if($data['status_id'] ==4) {
                                                    echo"<td><a href='index.php?n=reply-ticket&mid=$mid'><span class='label label-success'>Solved</span></a></td>";
                                                }
                                                else if($data['status_id'] ==1) {
                                                    echo"<td><a href='index.php?n=reply-ticket&mid=$mid'><span class='label label-warning'>Open</span></a></td>";
                                                }
                                                                                            
                                                echo"
                                                <td><a href='index.php?n=reply-ticket&mid=$mid'>".$data['ticket_date']."</a></td>
                                                <td>
                                                    <a href='index.php?n=reply-ticket&mid=$mid' class='btn btn-sm btn-icon btn-pure btn-outline delete-row-btn' data-toggle='tooltip' data-original-title='Delete'><i class='ti-more' aria-hidden='true'></i></a>
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

    
