<?php
	session_start(); 
	$con = mysql_connect("2ef4e5123a3083b3e63788dba6fbc9c9ac69a006.rackspaceclouddb.com","wg","123123");
	
	$select = mysql_select_db("warmgreetdb",$con);
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
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
	
		$passhash = md5($password);
		//mail($email,"Welcome to Warmgreet","Thanks for join with warmgreet, your passwod is '.$pass.' Please log in and change it now. Thanks ");
	
	
		$query = "INSERT INTO user(Name,Email,Password) VALUE ('".$name."','".$email."','".$passhash."')";
		$sql = mysql_query($query,$con);
		if($sql)
		{
			header("location:index.php");	
		}		
	}
?>
