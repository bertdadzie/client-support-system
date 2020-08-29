           <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-xlg-2 col-lg-3 col-md-4">
                                    <div class="card-body inbox-panel"><a href="index.php?n=add-support-agent" class="btn btn-danger m-b-20 p-10 btn-block waves-effect waves-light">Add Team member</a>
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
                                <h4 class="card-title">Support Team</h4>
                                <div class="table-responsive">
                                    <table id="support" class="table m-t-30 table-hover no-wrap contact-list" data-page-size="10">
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
                                                    <a href='index.php?n=profile&mid=$mid'><img src='$path' alt='user' class='img-circle' />".$data['first_name']." ".$data['last_name']."</a>
                                                </td>
                                                <td><a href='index.php?n=profile&mid=$mid''>".$data['email']."</a></td>
                                                <td><a href='index.php?n=profile&mid=$mid''>".$data['phone_number']."</a></td>
                                                <td><span class='label label-inverse'>".$data['role1']."</span></td>
                                                <td><a href='index.php?n=profile&mid=$mid''>".$data['department1']."</a></td>
                                                <td><a href='index.php?n=profile&mid=$mid''>".$data['gender']."</a></td>
                                                <td>
                                                    <a href='index.php?n=profile&mid=$mid' class='btn btn-sm btn-icon btn-pure btn-outline delete-row-btn' data-toggle='tooltip' data-original-title='Delete'><i class='ti-more' aria-hidden='true'></i></a>
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
            