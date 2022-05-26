<?php

session_start();
require_once 'controller/config.php';

$name = $_POST ['name'];
$price = $_POST ['price'];
$qty = $_POST ['qty'];
$supplier = $_POST ['customer_name'];
$code = $_POST ['code'];
$cost = $_POST ['cost'];


if(isset($_POST['add-prod'])){
    try{

$query = "INSERT INTO product_tbl (prod_name,  price,  qty, supplier, prod_code, cost) VALUES ('$name', '$price', 
                        '$qty', '$supplier' , '$code','$cost' )";

$dbh->exec($query);
}catch(PDOException $e){
    echo $e->getMessage();
}
$_SESSION['message']=array("text"=>"User successfully created.","alert"=>"info");
$conn = null;
header('location: /new-sia/products.php');
}

?>

