<?php

session_start();

require_once('config.php');


$username = $_POST['username'];
$password1 = $_POST['password1'];

$sql = "SELECT * FROM doctorregister  WHERE username = ? AND password1 = ? LIMIT 1";
$stmtselect  = $db->prepare($sql);
$result = $stmtselect->execute([$username, $password1]);

if($result){
	$user = $stmtselect->fetch(PDO::FETCH_ASSOC);
	if($stmtselect->rowCount() > 0){
		$_SESSION['doctorlogin'] = $user;
		echo '1';
	}else{
		echo 'There is no such record of patient';		
	}
}else{
	echo 'There were errors while connecting to database.';
	
	

	
}