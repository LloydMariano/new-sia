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

      <link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>

<script type="text/javascript">

  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script> 
 </head>
  <body>
  
                       <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                 <h1>Point of sales</h1> 

                                <div class="col-sm-12">
                    <div class="card tabs-card">
                        <div class="card-block p-0">
    
   
                    <div class="container">
                       <div class="tab-content card-block">
                    <div class="tab-pane active" id="home3" role="tabpanel">
                    <form action="info.php" method="POST">
                    <input type="hidden" name="pt" value="<?php echo $_GET['id']; ?>" />
                    <input type="hidden" name="invoice" value="<?php echo $_GET['invoice']; ?>" />
                    <div class="form1">
                                <div class="form-group row">
                                    
                                <div class="col-sm-4">
                                    <span>Product name</span>                 
                                     <select class="form-control" name="prod_name" required>
  
                    <?php
    include('php/config/connection.php');
	$result = $db->prepare("SELECT * FROM product_tbl");
		// $result->bindParam(':userid', $res);
		$result->execute();
	?>
                   <option > </option>       
	<?php for($i=0; $row = $result->fetch(); $i++){	 ?> <option value="<?php echo $row['prod_code']; ?>"><?php echo $row['prod_name']; ?> </option>
             <?php
	}
	?>
                                    </select>
                        
                                    </div>
                                    <div class="col-sm-2">
                                    <span>Quantity</span>
                                        <input type="number" class="form-control"
                                         name="qty" required>
                                    </div>
                                    <div class="col-sm-2">
                                    <span>Discount</span>
                                    <input type="number" name="discount" class="form-control" value="0" autocomplete="off" />
                                    </div>
                                    <div class="btn align-self-center">
                                    <button class="btn btn-primary ">ADD</button>
                                    
                                  </div>

                                  </form>               
                               
                                </div>
                                </div>
                                 <div class="table-responsive">
                                        <table id="tb" class="table">
                                        <thead>
                                        </thead>
	<tbody>
                                               <tr>
                                                <th>Product Code</th>
                                                <th>Product Name</th>
                                                <th>Product Quantity</th>
                                                <th>Price</th>
                                                <th>Discount</th>
                                                <th>Amount</th>
                                                <th>Action</th>
                                            </tr>

                                            <tr>

                                            <?php
				$id=$_GET['invoice'];
                include('php/config/connection.php');   
				$result = $db->prepare("SELECT * FROM pos_tbl WHERE invoice= :userid");
				$result->bindParam(':userid', $id);
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">	
			<td><?php echo $row['product']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['qty']; ?></td>
			<td>
			<?php
			$ppp=$row['price'];
			echo formatMoney($ppp, true);
			?>
			</td>
			<td>
			<?php
			$ddd=$row['discount'];
			echo formatMoney($ddd, true);
			?>
			</td>
			<td>
			<?php
			$dfdf=$row['amount'];
			echo formatMoney($dfdf, true);
			?>
			</td>
			<td><a href="delete.php?id=<?php echo $row['transaction_id']; ?>&invoice=<?php echo $_GET['invoice']; ?>&dle=<?php echo $_GET['id']; ?>&qty=<?php echo $row['qty'];?>&code=<?php echo $row['product'];?>"> Delete </a></td>
			</tr>
			<?php
				}
			?>
			<tr>
				<td colspan="5"><strong style="font-size: 12px; color: #222222;">Total:</strong></td>
				<td colspan="2"><strong style="font-size: 12px; color: #222222;">
				<?php
				function formatMoney($number, $fractional=false) {
					if ($fractional) {
						$number = sprintf('%.2f', $number);
					}
					while (true) {
						$replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
						if ($replaced != $number) {
							$number = $replaced;
						} else {
							break;
						}
					}
					return $number;
				}
				$sdsd=$_GET['invoice'];
				$resultas = $db->prepare("SELECT sum(amount) FROM pos_tbl WHERE invoice= :a");
				$resultas->bindParam(':a', $sdsd);
				$resultas->execute();
				for($i=0; $rowas = $resultas->fetch(); $i++){
				$fgfg=$rowas['sum(amount)'];
				echo formatMoney($fgfg, true);
				}
				?>
				</strong></td>
			</tr>
		
	</tbody>
</table>
			    
<br>
<a rel="facebox" id="cccc" href="checkout.php?pt=<?php echo $_GET['id']?>&invoice=<?php echo $_GET['invoice']?>&total=<?php echo $fgfg ?>&cashier=<?php echo $_SESSION['SESS_FIRST_NAME']?>"><button class="btn btn-primary ">Check Out  </button></a>   
<div class="clearfix"></div>
</div>
                            </div>
                            </div>
                            </div>		
                            </div>	
                            </div>
                                </div>
                              
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
 

   
                  
            <!-- <form> -->
                     <!-- <div class="form">
                     <div class="form-group row">         
                        <div class="col-sm-5  mt-2">
                                    <input type="text" class="form-control"
                                        placeholder="CUSTOMER NAME" name="customer_name" required>
    
                                    </div>
                        <div class="col-sm-5 mt-2">
                                    <input type="text" class="form-control"
                                        placeholder="TRANSACTION CODE" name="trans_code" required>
                                   </div> 
                        <div class="mt-0">  
                        <button class="btn btn-danger btn-round"><i class="ti-reload"></i>RELOAD</button>
    </div>
                    </div>
                    </div> 
                    </form> 
                                <div class="table-responsive">
                                        <table id="tb" class="table">
                                            <tr>
                        
                                            <th>Product Name</th>
                                                <th>Product Price</th>
                                                <th>Product Quantity</th>
                                                <th>Action</th>
                                          </tr>
                                          <tr>

                                                <td>collagen</td>
                                                <td>200</td>
                                                <td>1</td>
                                                <td>
                                                    <div class="edit">
                                                        <a class="dwn_btn"href="php/delete_product/del_con.php?id=<?php echo htmlentities($result->product_id); ?>">   <button class="delete"><i class="ti-trash" style="size: large;"></i></button> </a>
                                                    </div>
                                                </td>
                                            </tr>
    </table>
    </div>

                                    
                                    </div>
                        </div>
                                </div>
                            </div>

                        <div class="button">
                            <button  name="add-prod" class="btn btn-success btn-round">Save</button>
                            
                            <button  class="btn btn-danger btn-round" onclick="goBack()">Cancel</button>
                            <script>
                                     function goBack() {
                                               window.history.back();
                                       }
              </script>
                        </div>
                            </form>
                       </div>             
                    
                     </div> -->
  

            </div>
            </div>
            </div>
            </div>
            </div>
            </div>

<!-- Required Jquery -->
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
