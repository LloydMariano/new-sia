<?php

require_once 'php/controller/config.php';

if(isset($_POST['change-pass'])){

$user_id = intval($_GET['id']);
$password  = $_POST ['password'];

$sql = " UPDATE user_tbl SET password=:password WHERE user_id=:uid";

$query = $dbh->prepare($sql);

$query->bindParam('password',$password,PDO::PARAM_STR);
$query->bindParam('uid',$user_id, PDO::PARAM_STR);

$query->execute();
echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='/new-sia/index.php'</script>";
}

?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>AMK Inventory Management System </title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body class="fix-menu">
        <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body mr-auto ml-auto">
  <?php 

$user_id = intval($_GET['id']);
$sql = "SELECT * from  user_tbl WHERE user_id=:uid";
$query = $dbh->prepare($sql);
$query->bindParam('uid',$user_id,PDO::PARAM_STR);
$query->execute();
$row=$query->fetchAll(PDO::FETCH_OBJ);


$cnt=1;
if($query->rowCount() >0)
{
  foreach($row as $result);
{
?>
                        <form  action="" method="POST" class="md-float-material">
                            
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-left txt-primary">Change Password</h3>
                                    </div>
                                </div>
              <hr/>
                                    <div class="input-group">
                                    <p  class="form-control" > <?php echo htmlentities($result->email); ?> </p>
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password"  placeholder="New Password" required >
                                    <span class="md-line"></span>
                                </div>
			
                                <div class="row m-t-25 text-left">
                                    <div class="col-sm-7 col-xs-12">
                                        
                                    </div>
                                </div>
         <?php }} ?>  
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button name="change-pass" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Next</button>
                                        <a href="forgot.php"><button type="button" class="btn btn-danger btn-md btn-block waves-effect text-center m-b-20">Cancel</button></a>
                                    </div>
                                </div>

                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
 
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
    <script type="text/javascript" src="assets/js/modernizr/css-scrollbars.js"></script>
    <script type="text/javascript" src="assets/js/common-pages.js"></script>
</body>

</html>
