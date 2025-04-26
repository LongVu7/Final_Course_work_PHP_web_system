<?php
	session_start();
	
	require_once 'conn.php';
	
	if(ISSET($_POST['login'])){
		if($_POST['name'] != "" || $_POST['password'] != ""){
			$name = $_POST['name'];
			$password = $_POST['password'];
			$sql = "SELECT * FROM `author` WHERE `name`=? AND `password`=? ";
			$query = $conn->prepare($sql);
			$query->execute(array($name,$password));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
				$_SESSION['user'] = $fetch['id'];
				header("location: index.php");
				exit();
			} else{
				echo "
				<script>alert('Invalid username or password')</script>
				<script>window.location = 'templates/login.html.php'</script>
				";
			}
		}else{
			echo "
				<script>alert('Please complete the required field!')</script>
				<script>window.location = 'templates/login.html.php'</script>
			";
		}
	}
?>