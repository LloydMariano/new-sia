<?php

session_start();
require_once 'controller/config.php';

$customer_name = $_POST ['customer_name'];
$trans_code = $_POST ['trans_code'];
$total = $_POST ['total'];
$trans_date = $_POST ['trans_date'];



if(isset($_POST['add-invoice'])){
    try{

$query = "INSERT INTO invoice_tbl (customer_name, trans_code, total, trans_date) VALUES ('$customer_name', '$trans_code', '$total', '$trans_date'   )";

$dbh->exec($query);
}catch(PDOException $e){
    echo $e->getMessage();
}
$_SESSION['message']=array("text"=>"User successfully created.","alert"=>"info");
$conn = null;
header('location: /new-sia/invoice.php');
}

?>

