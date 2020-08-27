<?php 
$output ='';
$ticket_id = $feedback = $userExperience ='';
if($_SERVER["REQUEST_METHOD"] == "POST"){
if (empty($_POST["feedback"])) {
    $feedback.= "<p>Fill can not be empty</p>".'';
}
if (empty($_POST["userExperience"])) {
    $userExperience.= "<p>Fill can not be empty</p>".'';
}
if (empty($_POST["ticket_id"])) {
    $ticket_id.= "<p>Fill can not be empty</p>".'';
}

$id = $_POST['ticket_id'];
$sql = "SELECT *,(SELECT ticket_number FROM `ticket` p2 WHERE p1.ticket_id = p2.ticket_id) ticketNumber, (SELECT email FROM `ticket` p2 WHERE p1.ticket_id = p2.ticket_id) email FROM ticket_replies p1";
require('config/dbconfig.php');
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$ticketNumber= $row['ticketNumber'];

if ($ticketNumber ==$id) {
require('n/functions.php');
$query= addRecord($_POST,'feedback');
require('config/dbconfig.php');
$result = mysqli_query($con,$query);
if($result){
    $output .= "<p class='alert alert-info'>Thanks For Your feedback</p>".'';
   // header('location: index.php?page=all-brand');
}


}else{
        $output .= "<p class='alert alert-info'>Your ticket does not correspond any ticket</p>".'';
}
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themedesigner.in/demo/admin-press/mini-sidebar/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Aug 2020 10:37:37 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Admin Press Admin Template - The Ultimate Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <style>
         .error {color: #FF0000;}
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
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
    <section id="wrapper">
        <div class="login-register">
            <div class="login-box card">
                <div class="card-body">
                 <?php echo $output; ?>
                    <form class="form-horizontal form-material" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                       <label for="inputPassword4">How do you rate your overall experience?</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineCheckbox1" value="Bad" name="userExperience">
                                            <label class="form-check-label" for="inlineCheckbox1">Bad</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineCheckbox2" value="Average" name="userExperience">
                                            <label class="form-check-label" for="inlineCheckbox2">Average</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineCheckbox3" value="Good" name="userExperience">
                                            <label class="form-check-label" for="inlineCheckbox3">Good</label>
                                        </div> 
                                         <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineCheckbox4" value="Good" name="userExperience">
                                            <label class="form-check-label" for="inlineCheckbox4">Excellent</label>
                                        </div> 
                                    </div>
                                    <span class = "error"><?php echo $userExperience;?></span>
                                </div>
                                <hr>
                                <span class = "error"><?php echo $feedback;?></span>
                                <div class="form-group">
                                <textarea class="form-control" name="feedback" rows="15" placeholder="Your Comment ..."></textarea>
                                </div>
                                <div class="form-group ">
                                    <div class="col-xs-12">
                                        <span class = "error"><?php echo $ticket_id;?></span>
                                        <input class="form-control" type="text" name="ticket_id"  placeholder="Please Enter Ticket ID"> </div>
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
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/plugins/bootstrap/js/popper.min.html"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="assets/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="assets/plugins/sweetalert/jquery.sweet-alert.custom.js"></script>
    <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>


<!-- Mirrored from themedesigner.in/demo/admin-press/mini-sidebar/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Aug 2020 10:37:38 GMT -->
</html>