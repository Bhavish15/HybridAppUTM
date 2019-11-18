<?php

session_start();

$db = mysqli_connect('localhost','root','','newsevent');

if(isset($_POST['login_btn'])){
login();
}


function login(){
global $db, $username, $password;

$username = $_POST['username'];
$password = $_POST['password'];
	
	

		$query = "SELECT * FROM eventtable WHERE uname='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

if (mysqli_num_rows($results) == 1) { 
// user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['role'] == 'A') {

				$_SESSION['user'] = $logged_in_user;
				
				header('location: Admin.php');		  
			}else if($logged_in_user['role'] == 'S'){
				$_SESSION['user'] = $logged_in_user;
				header('location: Feedback.php');
				
			}
		}
		
		
	
	

}

?>