<?php
	session_start();
	
	require_once 'controller/config.php';
	
	if(ISSET($_POST['login'])){
		if($_POST['username'] != "" || $_POST['password'] != ""){
			$username = $_POST['username'];
			// md5 encrypted
			// $password = md5($_POST['password']);

			$password = $_POST['password'];
			$sql = "SELECT * FROM `user_tbl` WHERE `username`=? AND `password`=? ";
			$query = $dbh->prepare($sql);
			$query->execute(array($username,$password));
			$row = $query->rowCount();
			$fetch = $query->fetch();

			if($row > 0){
				$_SESSION['user'] = $fetch['user_id'];
				header("location: /new-sia/home.php");	
			}
			else{
				echo "
				<script>alert('Invalid email or password')</script>
				<script>window.location = '/new-sia/index.php'</script>
				";
			}
		
			}else{
			echo "
				<script>alert('Please complete the required field!')</script>
				<script>window.location = '/new-sia/index.php'</script>
			";
		}


	}
?>