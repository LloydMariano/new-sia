<?php

require_once 'php/controller/config.php';

if(isset($_POST['update'])){

$prod_id = intval($_GET['id']);
$prod_name = $_POST ['prod_name'];
$price = $_POST ['price'];
$qty = $_POST ['qty'];
$supplier= $_POST ['supplier'];
$prod_code = $_POST ['prod_code'];
$cost = $_POST ['cost'];


$sql = " UPDATE product_tbl SET prod_name=:prod_name,  price=:price,  qty=:qty, supplier=:supplier,
prod_code=:prod_code, cost =:cost  WHERE product_id=:uid";

$query = $dbh->prepare($sql);

$query->bindParam('prod_name',$prod_name,PDO::PARAM_STR);
$query->bindParam('prod_code',$prod_code ,PDO::PARAM_STR);
$query->bindParam('cost',$cost ,PDO::PARAM_STR);
$query->bindParam('price',$price ,PDO::PARAM_STR);
$query->bindParam('supplier',$supplier ,PDO::PARAM_STR);
$query->bindParam('qty',$qty ,PDO::PARAM_STR);
$query->bindParam('uid',$prod_id, PDO::PARAM_STR);

$query->execute();
echo "<script>alert('Record Updated successfully');</script>";
//Code for redirection
echo "<script>window.location.href='/new-sia/products.php'</script>";
}

?>

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
                       
   <?php 

$prod_id = intval($_GET['id']);
$sql = "SELECT * from  product_tbl WHERE product_id=:uid";
$query = $dbh->prepare($sql);
$query->bindParam('uid',$prod_id,PDO::PARAM_STR);
$query->execute();
$row=$query->fetchAll(PDO::FETCH_OBJ);


$cnt=1;
if($query->rowCount() >0)
{
  foreach($row as $result);
{
?>
                            <!-- Tab panes -->
                            <form name="update-product" method="POST">
                                <h4 class="head">UPDATE Product</h4>
                                <div class="form">
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                    <span>Product name</span>
                                        <input type="text" class="form-control"
                                        placeholder="PRODUCT NAME" name="prod_name"
                                        value="<?php echo htmlentities($result->prod_name ); ?> " required>
                                    </div>
                                    <div class="col-sm-6">
                                    <span>Price</span>
                                        <input type="number" class="form-control"
                                        placeholder="PRODUCT PRICE" name="price"
                                        value="<?php echo htmlentities($result->price); ?>" required>
                                    </div>
                                    <div class="col-sm-6">
                                    <span>Quantity</span>
                                        <input type="number" class="form-control"
                                        placeholder="PRODUCT QUANTITY" name="qty"
                                        value="<?php echo htmlentities($result->qty); ?>" required>
                                    </div>
                                    <?php }} ?>  
                                    <div class="col-sm-6">
                                    <span>Invoice</span>
                                    <select class="form-control"  name="supplier" required>
                <?php
    include('php/config/connection.php');
	$result = $db->prepare("SELECT * FROM invoice_tbl");
		// $result->bindParam(':userid', $res);
		$result->execute();
            
	?>                      <option>  </option>
		      <?php for($i=0; $row = $result->fetch(); $i++){ ?>     <option value="<?php echo $row['customer_name']; ?>" required> <?php echo $row['customer_name']; ?></option>
             
             <?php       
	}
	?>
        </div>
<?php
$prod_id = intval($_GET['id']);
$sql = "SELECT * from  product_tbl WHERE product_id=:uid";
$query = $dbh->prepare($sql);
$query->bindParam('uid',$prod_id,PDO::PARAM_STR);
$query->execute();
$row=$query->fetchAll(PDO::FETCH_OBJ);


$cnt=1;
if($query->rowCount() >0)
{
  foreach($row as $result);
{
?>
                                     <div class="col-sm-6">
                                        <span></span>
                                        <input type="hidden" class="form-control">
                                    </div>
                                    <div class="col-sm-6">
                                    <span>Product Code </span>
                                        <input type="number" class="form-control"
                                        name="prod_code" 
                                        value="<?php echo htmlentities($result->prod_code); ?>" required>
                                    </div>
                                    <div class="col-sm-6">
                                    <span>Product cost </span>
                                        <input type="number" class="form-control"
                                            name="cost" 
                                        value="<?php echo htmlentities($result->cost); ?>" required>
                                    </div>

                                    </div>
                                    
                                </div>
                            </div>
 <?php }} ?>  
                        <div class="button">
                            <button  name="update" class="btn btn-success btn-round">Update</button>
                            <button  class="btn btn-danger btn-round" onclick="goBack()">Refresh</button>
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

