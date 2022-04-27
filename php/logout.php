<?php
	session_start();
	session_destroy();
	header('location: /new-sia/index.php');
?>