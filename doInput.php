<?php
	session_start(); 
	$con = mysql_connect("localhost","root","");
	
	$select = mysql_select_db("dbwg",$con);
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	
	$query = "SELECT Email FROM user WHERE Email='".$email."'";
	$result = mysql_query($query,$con);
	$found = mysql_num_rows($result);
	
	
	if($found != 0)
	{
		$_SESSION["err"]="Username already exist";
		header('location:index.php');	
	}
	else
	{
	
		$pass = "wilyefendi";
		$passhash = md5($pass);
		//mail($email,"Welcome to Warmgreet","Thanks for join with warmgreet, your passwod is '.$pass.' Please log in and change it now. Thanks ");
	
	
		$query = "INSERT INTO user(Name,Email,Password) VALUE ('".$name."','".$email."','".$passhash."')";
		$sql = mysql_query($query,$con);
		if($sql)
		{
			header("location:index.php");	
		}		
	}
?>