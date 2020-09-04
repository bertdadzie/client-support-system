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
                
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="">
                    <div class="login-box card">
                        <div class="card-body">
                            <form class="form-horizontal form-material" action="index.php?n=clientAction" method="post" enctype="multipart/form-data">
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
                                    <input type="file" name="image" id="input-file-now-custom-1" class="dropify" data-default-file="" />
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