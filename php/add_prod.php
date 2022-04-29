<?php

session_start();
require_once 'controller/config.php';

$prod_name = $_POST ['prod_name'];
$prod_price = $_POST ['prod_price'];
$prod_qty = $_POST ['prod_qty'];
$date_received = $_POST ['date_received'];
$prod_exp = $_POST ['prod_exp'];


if(isset($_POST['add-prod'])){
    try{

$query = "INSERT INTO product_tbl (prod_name, prod_price, prod_qty, date_received, prod_exp) VALUES ('$prod_name', '$prod_price', '$prod_qty', '$date_received' , '$prod_exp' )";

$dbh->exec($query);
}catch(PDOException $e){
    echo $e->getMessage();
}
$_SESSION['message']=array("text"=>"User successfully created.","alert"=>"info");
$conn = null;
header('location: /new-sia/products.php');
}

?>

