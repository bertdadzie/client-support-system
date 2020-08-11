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
$ticketNumber = rand(1000,9999); 
?>



<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themedesigner.in/demo/admin-press/mini-sidebar/app-email.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Aug 2020 10:37:37 GMT -->
<?php include'includes/head.php' ?>

<body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php include('includes/navbar.php'); ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
       <aside class="left-sidebar">
          <?php include('includes/sidebar.php'); ?>
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">AMA Client Support</h3>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-xlg-6 col-lg-6 col-md-4 ">
                                    <div class="card-body inbox-panel"> 
                                        <div><h3 class="card-title">Frequent  Ask Question</h3></div>
                                        <div id="accordian-3">
                                            <div class="card m-b-0">
                                                <a class="card-header text-decoration-none" id="heading11">
                                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                                        <h5 class="m-b-0">Accordion Example 1</h5>
                                                    </button>
                                                </a>
                                                <div id="collapse1" class="collapse show" aria-labelledby="heading11" data-parent="#accordian-3">
                                                    <div class="card-body">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card m-b-0">
                                                <a class="card-header" id="heading22">
                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                                        <h5 class="m-b-0">Accordion Example 2</h5>
                                                    </button>
                                                </a>
                                                <div id="collapse2" class="collapse" aria-labelledby="heading22" data-parent="#accordian-3">
                                                    <div class="card-body">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <a class="card-header" id="heading33">
                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                                        <h5 class="m-b-0">Accordion Example 3</h5>
                                                    </button>
                                                </a>
                                                <div id="collapse3" class="collapse" aria-labelledby="heading33" data-parent="#accordian-3">
                                                    <div class="card-body">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xlg-6 col-lg-6 col-md-8 bg-light-part b-l">
                                    <div class="card-body">
                                        <h3 class="card-title">Your Complaint</h3>
                                        <form action="ticketAction.php" method="post" enctype="multipart/form-data">
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
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2019 
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
     <?php include('includes/js.php') ?>

    <script>
    $(document).ready(function() {

        $('.textarea_editor').wysihtml5();

    });
    </script>
    <script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
</body>


<!-- Mirrored from themedesigner.in/demo/admin-press/mini-sidebar/app-compose.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Aug 2020 10:38:16 GMT -->
</html>