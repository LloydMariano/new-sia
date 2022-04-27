<?php


	session_start();
	//including the database connection
    require_once 'controller/config.php';
 
	if(ISSET($_POST['login'])){
		// Setting variables
		$email = $_POST['email'];
		$password = $_POST['password'];
 
		// Select Query for counting the row that has the same value of the given username and password. This query is for checking if the access is valid or not.
		$query = "SELECT COUNT(*) as count FROM `user_tbl` WHERE `email` = :email AND `password` = :password";
		$stmt = $dbh->prepare($query);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':password', $password);
		$stmt->execute();
		$row = $stmt->fetch();
 
		$count = $row['count'];
		if($count > 0){
			header('location: /new-sia/home.php');
		}else{
			$_SESSION['error'] = "Invalid username or password";
			header('location: /new-sia/index.php');
		}
	}
?>



