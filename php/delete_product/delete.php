<?php
require_once '../controller/config.php';

$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
if(isset($_GET['id'])){
session_start();
$prod_id = $_SESSION['product_id'];

    $sql = "DELETE  FROM product_tbl WHERE product_id= ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$prod_id]);
    echo '<script type="text/javascript">';
    echo '  window.location.replace("/new-sia/products.php")';
    echo '</script>';
}else{
    header("Location: /new-sia/products.php"); 

  
      }