<?php

	//starting the session
	session_start();
 
	//including the database connection
    require_once 'controller/config.php';
 
	if(ISSET($_POST['sign_btn'])){
		// Setting variables
        $firstname = $_POST ['firstname'];
        $lastname = $_POST ['lastname'];
        $email = $_POST ['email'];
        $password = $_POST ['password'];
        
 
		// Insertion Query
		$query = "INSERT INTO `user_tbl` (firstname, lastname, email, password) VALUES(:firstname, :lastname, :email, :password)";
		$stmt = $dbh->prepare($query);
		$stmt->bindParam(':firstname', $firstname);
		$stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':email', $email);
		$stmt->bindParam(':password', $password);
		
 
		// Check if the execution of query is success
		if($stmt->execute()){
			//setting a 'success' session to save our insertion success message.
			$_SESSION['success'] = "Successfully created an account";
			//redirecting to the index.php 
			header('location: /new-sia/auth-sign-up.php');
		}
	}
?>

