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


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/ama-icon.jpg">
    <title><?php echo $n_title; ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- wysihtml5 CSS -->
    <link rel="stylesheet" href="assets/plugins/html5-editor/bootstrap-wysihtml5.css" />
    <!-- Dropzone css -->
    <link href="assets/plugins/dropzone-master/dist/dropzone.css" rel="stylesheet" type="text/css" />
     <link rel="stylesheet" href="assets/plugins/intl-tel-input-master/build/css/intlTelInput.css">

    <link href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="assets/plugins/summernote/dist/summernote.css" rel="stylesheet" />
     <link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="assets/plugins/dropify/dist/css/dropify.min.css">
      <link href="assets/plugins/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
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
                
           