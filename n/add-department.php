<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
require('functions.php');
$query= addRecord($_POST,'department');
require('config/dbconfig.php');
$result = mysqli_query($con,$query);
if($result){
    echo'successful';
   // header('location: index.php?page=all-brand');
}else{
    //header('location: index.php?page=add-brand');
     //echo mysqli_error($con);
}
}
?>

                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="login-register">
                    <div class="login-box card">
                        <div class="card-body">
                            <form class="form-horizontal form-material" id="loginform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="text" name="dept_name"  placeholder="Department Name"> </div>
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