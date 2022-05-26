<?php
	include('php/config/connection.php');
	$id=$_GET['id'];
	$c=$_GET['invoice'];
	$sdsd=$_GET['dle'];
	$qty=$_GET['qty'];
	$wapak=$_GET['code'];
	//edit qty
	$sql = "UPDATE product_tbl
			SET qty=qty+?
			WHERE prod_code=?";
	$q = $db->prepare($sql);
	$q->execute(array($qty,$wapak));

	$result = $db->prepare("DELETE FROM pos_tbl WHERE transaction_id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
	header("location: pos.php?id=$sdsd&invoice=$c");
?>