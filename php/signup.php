
<?php
	session_start();
	require_once 'controller/config.php';
 
	if(ISSET($_POST['sign_btn'])){
		if($_POST['username'] != "" || $_POST['fullname'] != "" || $_POST['email'] != "" || $_POST['password'] != ""){
			try{
				$username = $_POST ['username'];
        		$fullname = $_POST ['fullname'];
        		$email = $_POST ['email'];
				// md5 encrypted
				// $password = md5($_POST['password']);
				$password = $_POST['password'];

				// $hashedPass = password_hash($password, PASSWORD_DEFAULT);

				$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "INSERT INTO `user_tbl` VALUES ('', '$username', '$fullname', '$email', '$password ')";
				$dbh->exec($sql);	
			}catch(PDOException $e){
				echo $e->getMessage();
			}
			$_SESSION['message']=array("text"=>"User successfully created.","alert"=>"info");
			$dbh = null;
			header('location: /new-sia/index.php');
		}else{
			echo "
				<script>alert('Please fill up the required field!')</script>
				<script>window.location = '/new-sia/auth-sign-up.php'</script>
			";
		}
	}
?>