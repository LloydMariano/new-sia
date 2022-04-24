<?php
require_once '../controller/config.php';

$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

if(isset($_GET['id'])){
  session_start();
  $prod_id = $_GET['id'];
  $_SESSION['product_id'] = $prod_id;
  echo '<script type="text/javascript">';
  echo 'let res = confirm("Are you sure you want to delete?");';
  echo 'if ( res == true) { ';
    echo '  window.location.replace("delete.php?id='.$prod_id.'") ';
    echo ' } else { ';
    echo '  window.location.replace("/new-sia/products.php") }';
    echo '</script>';
}else{
  header("Location: /new-sia/products.php"); 
    }


?>
