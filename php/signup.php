<?php

session_start();
require_once 'controller/config.php';

$username = $_POST ['username'];
$email = $_POST ['email'];
$password = $_POST ['pass'];
$con_password = $_POST ['con_pass'];



if(isset($_POST['signup'])){
    try{

$query = "INSERT INTO user_tbl (username, email, password) VALUES ('$username', '$email', '$password')";

$dbh->exec($query);
}catch(PDOException $e){
    echo $e->getMessage();
}
$_SESSION['message']=array("text"=>"User successfully created.","alert"=>"info");
$conn = null;
header('location: /new-sia/home.php');
}

?>

