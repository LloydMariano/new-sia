<?php

session_start();
require_once 'controller/config.php';

$prod_name = $_POST ['prod_name'];
$prod_code = $_POST ['prod_code'];
$prod_qty = $_POST ['prod_qty'];
$prod_exp = $_POST ['prod_exp'];
$prod_des = $_POST ['prod_des'];



if(isset($_POST['add-prod'])){
    try{

$query = "INSERT INTO product_tbl (prod_name, prod_code, prod_qty, prod_exp, prod_des) VALUES ('$prod_name', '$prod_code', '$prod_qty', '$prod_exp', '$prod_des')";

$dbh->exec($query);
}catch(PDOException $e){
    echo $e->getMessage();
}
$_SESSION['message']=array("text"=>"User successfully created.","alert"=>"info");
$conn = null;
header('location: /new-sia/products.php');
}

?>

