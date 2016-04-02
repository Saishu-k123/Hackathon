<?php

$username = $_POST['username'];
$password = $_POST['password'];


if($username && $password){
	$connect = mysqli_connect("localhost","root","") or die("couldn't connect!");
	mysqli_select_db($connect,"phplogin") or die("could not find database");	
	$query = mysqli_query($connect,"select * from users where username ='$username' and password='$password'");
	$numrows = mysqli_num_rows($query);
	if($numrows==0){
		echo "Incorrrect Username/Password";
		//header('Location: http://localhost/project/1.html');
		//die("Incorrrect Username/Password");
	}
	else {
		 echo " Login Successful";
	}
	//echo $numrows;
}

else 
	die("Please enter a valid username and password");

?>
