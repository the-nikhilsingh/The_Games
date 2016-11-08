<?php
extract($_POST);
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
echo "<h1 style='font-family:Trebuchet MS, Helvetica, sans-serif;'>Account Created.</h1> <br> <a style='font-size:20px; text-decoration:none''font-family:Trebuchet MS, Helvetica, sans-serif;' href='login.html'>Click here to Sign In.</a>";
$server="localhost";
$user="root";
$pass="";
$con=mysql_connect($server,$user,$pass);
if(!$con)
{
	die("Could not connect".mysql_error());
	
}
$select=mysql_select_db('dataset',$con);
if(!$select)
{
	die("Could not get the data base".mysql_error());
	
}

if(isset($_POST))
{
	$query="INSERT INTO info(name,username,password,email,Game_List) VALUES ('$name','$username','$password','$email','$Game_List')";
	/*if(!$query)
	{
		die(mysql_error());
	}*/
}
$result=mysql_query($query,$con);
if(!$result)
{
	die("Database acess failed.".mysql_error());
}

/*$retval=mysql_query("select * from ",$con);
if(!$retval)
{
	die("could not get the data:".mysql_error());
}*/


mysql_close($con);
?>



