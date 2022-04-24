<?php
require_once '../controller/config.php';

$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

if(isset($_GET['id'])){
  session_start();
  $voice_id = $_GET['id'];
  $_SESSION['invoice_id'] = $voice_id;
  echo '<script type="text/javascript">';
  echo 'let res = confirm("Are you sure you want to delete?");';
  echo 'if ( res == true) { ';
    echo '  window.location.replace("delete.php?id='.$voice_id.'") ';
    echo ' } else { ';
    echo '  window.location.replace("/new-sia/invoice.php") }';
    echo '</script>';
}else{
  header("Location: /new-sia/invoice.php"); 
    }


?>
