<?php
require_once '../controller/config.php';

$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
if(isset($_GET['id'])){
session_start();
$voice = $_SESSION['invoice_id'];

    $sql = "DELETE  FROM invoice_tbl WHERE invoice_id= ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$voice]);
    echo '<script type="text/javascript">';
    echo '  window.location.replace("/new-sia/invoice.php")';
    echo '</script>';
}else{
    header("Location: /new-sia/invoice.php"); 

  
      }