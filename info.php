<?php
session_start();
include('php/config/connection.php');
$a = $_POST['invoice'];
$b = $_POST['prod_name'];
$c = $_POST['qty'];
$w = $_POST['pt'];
$discount = $_POST['discount'];
$result = $db->prepare("SELECT * FROM product_tbl WHERE prod_code= :userid");
$result->bindParam(':userid', $b);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$asasa=$row['price'];
$name=$row['prod_name'];
}

//edit qty
$sql = "UPDATE product_tbl 
        SET qty=qty-?
		WHERE prod_code=?";
$q = $db->prepare($sql);
$q->execute(array($c,$b));
$fffffff=$asasa-$discount;
$d=$fffffff*$c;
// query
$sql = "INSERT INTO pos_tbl (invoice,product,qty,amount,name,price,discount) VALUES (:a,:b,:c,:d,:e,:f,:g)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$name,':f'=>$asasa,':g'=>$discount));

header("location: pos.php?id=$w&invoice=$a");

?>
