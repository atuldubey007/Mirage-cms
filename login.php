<?php
include("functions.php");
connectdb();
session_start();
$username=trimm($_POST['username']);
$password=trimm($_POST['password']);
$query=mysql_query("select * from admin where username='$username' and password='$password'") or die("Query Wrong");
if(mysql_num_rows($query)==1){
$_SESSION['username']=$username;	

header("location:index.php");
}
else {
	header("location:index.php?error=1");
	
}


?>