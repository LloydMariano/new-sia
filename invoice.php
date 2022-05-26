<!DOCTYPE html>
<html lang="en">

<head>

<?php include 'side-bar.php'; ?>
<?php require_once 'php/controller/config.php' ?>

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
                            <div class="tab-content card-block">
                                <div class="tab-pane active" id="home3" role="tabpanel">
                                <button id="export" class="btn btn-primary btn-md d-justify-end waves-effect text-center m-b-5" style="width: 20%; margin-left: 80%;">Export as EXCEL</button>
                                    <br>
                                    <div class="table-responsive">
                                        <table id="tb" class="table">
                                            <tr>
                                                <th>Name</th>
                                                <th>Transaction Code</th>
                                                <th>Total Amount</th>
                                                <th>Date of transaction</th>
                                                <th>Action</th>
                                            </tr>
  <?php
  $sql = "SELECT * from  invoice_tbl ";
  $query = $dbh -> prepare($sql);
  $query->execute();
  $results=$query->fetchAll(PDO::FETCH_OBJ);
  $cnt=1;
  if($query->rowCount() > 0)
  {
  foreach($results as $result)
  {

  ?>
                                            <tr>
                                            <td><?php echo htmlentities($result->customer_name); ?></td>
                                            <td><?php echo htmlentities($result->trans_code); ?></td>
                                            <td><?php echo htmlentities($result->total); ?></td>
                                            <td><?php echo htmlentities($result->trans_date); ?></td>
                                               
                                                <td>
                                                    <div class="edit">
                                                      
                                                        <a class="dwn_btn" href="update_invoice.php?id=<?php echo htmlentities($result->invoice_id); ?>">      <button class="update"><i class="ti-pencil-alt"></i></button> </a>
                                                        <a class="dwn_btn" href="php/delete-invoice/del_con.php?id=<?php echo htmlentities($result->invoice_id); ?>">    <button class="delete"><i class="ti-trash" style="size: large;"></i></button></a>
                                                    </div>
                                                </td>
                                            </tr>
             <?php $cnt=$cnt+1; }} ?>
                                        </table>
                                    </div>
                                </div>
                             
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

<script>
    document.getElementById('export').addEventListener('click', function() {
        var table3excel = new Table3Excel();
  table3excel.export(document.querySelectorAll("#tb"));
    });
  
</script>
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
<script src="assets/js/table3excel.js"></script>
</body>

</html>

