                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="">
                    <div class="login-box card">
                        <div class="card-body">
                            <form class="form-horizontal form-material" action="index.php?n=account-setting-action" method="post" enctype="multipart/form-data">
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="text" name="first_name" value="<?php echo $_SESSION['FIRST-NAME']; ?>"  placeholder="First Name"> 
                                        <input type="hidden" name="supportAgents_id" value="<?php echo $_SESSION['ID']; ?>">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="text" name="last_name" value="<?php echo $_SESSION['LAST-NAME']; ?>"  placeholder="Last Name"> </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="text" name="phone_number" value="<?php echo $_SESSION['TELEPHONE']; ?>"  placeholder="Phone number"> </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="email" name="email" value="<?php echo $_SESSION['EMAIL']; ?>"  placeholder="Email"> </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <input class="form-control" type="text" name="address" value="<?php echo $_SESSION['Address']; ?>"  placeholder="Address"> </div>
                                </div>
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                       <label for="inputPassword4">Gender</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineCheckbox1" value="male" name="gender" <?php if($_SESSION['Gender'] == 'male') { echo 'checked';}?>>
                                            <label class="form-check-label" for="inlineCheckbox1">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineCheckbox2" value="female" name="gender" <?php if($_SESSION['Gender'] == 'female') { echo 'checked';}?>>
                                            <label class="form-check-label" for="inlineCheckbox2">Female</label>
                                        </div> 
                                    </div>
                                </div>


                                <div class="form-group ">
                                    <input type="file" name="image" id="input-file-now-custom-1" class="dropify" data-default-file="<?php echo $_SESSION['IMAGE']; ?>" />
                                    <input type="hidden" name="oldimage" value="<?php echo $_SESSION['IMAGE']; ?>">
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