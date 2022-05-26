<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'side-bar.php'; ?>
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
      <!-- Favicon icon -->
      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
	  <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
  </head>

  <body>
 
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                      <div class="row">

                   <!-- tabs card start -->
                   <div class="col-sm-12">
                    <div class="card tabs-card">
                        <div class="card-block p-0">
                         
                            <!-- Tab panes -->
                            <form action="php/invoice-add.php" method="POST">
                                <h4 class="head">ADD INVOICE</h4>
                                <div class="form">
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                    <span>Name</span>
                                        <input type="text" class="form-control"
                                        placeholder="CUSTOMER NAME" name="customer_name" required>
                                    </div>
                                    <div class="col-sm-6">
                                    <span>Transaction code</span>
                                        <input type="text" class="form-control"
                                        placeholder="TRANSACTION CODE" name="trans_code" required>
                                    </div>
                                    <div class="col-sm-6">
                                    <span>Total amount</span>
                                        <input type="text" class="form-control"
                                        placeholder=" TOTAL PRODUCT AMOUNT" name="total" required >
                                    </div>
                                    <div class="col-sm-6">
                                    <span>Transaction Date</span>
                                        <input type="date" class="form-control"
                                        placeholder="TRANSACTION DATE" name="trans_date" required>
                                    </div>
                                    </div>
                                    
                                </div>
                            </div>

                        <div class="button">
                            <button name="add-invoice" class="btn btn-success btn-round">Save</button>
                         
                            <button  class="btn btn-danger btn-round" onclick="goBack()">Cancel</button>
                            <script>
                                     function goBack() {
                                               window.history.back();
                                       }
              </script>
                        </div>
                            </form>
                             
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tabs card end -->
            </div>
        </div>

        <div id="styleSelector">

        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>


<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<!-- am chart -->
<script src="assets/pages/widget/amchart/amcharts.min.js"></script>
<script src="assets/pages/widget/amchart/serial.min.js"></script>
<!-- Chart js -->
<script type="text/javascript" src="assets/js/chart.js/Chart.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="assets/pages/todo/todo.js "></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript " src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vartical-demo.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
</body>

</html>

