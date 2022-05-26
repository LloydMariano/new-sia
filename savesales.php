<?php
session_start();
include('php/config/connection.php');
$a = $_POST['invoice'];
$b = $_POST['cashier'];
$c = $_POST['date'];
$d = $_POST['ptype'];
$e = $_POST['amount'];
$cname = $_POST['cname'];
$address= $_POST['address'];
$contact = $_POST['contact'];

if($d=='credit') {
$f = $_POST['due'];
$sql = "INSERT INTO sales (invoice_number,cashier,date,type,amount,due_date,name,address,contact) VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$cname, ':h'=>$address,
':i'=>$contact));
header("location: preview.php?invoice=$a");
exit();
}
if($d=='cash') {
$f = $_POST['cash'];
$sql = "INSERT INTO sales (invoice_number,cashier,date,type,amount,due_date,name,address,contact) VALUES (:a,:b,:c,:d,:e,:f,:g,:h,:i)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':g'=>$cname, ':h'=>$address,
':i'=>$contact ));
exit();
}
// query



?>