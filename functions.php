<?php

function checkerror(){
	if(isset($_GET['error'])){
		echo "Wrong username or password";}
	
	if(isset($_GET['warn'])){
		echo "You need to login firts";}
	}	
	
	
function trimm($string){
	return mysql_real_escape_string($string);
	
}
function loggedin(){
	return isset($_SESSION['username']);
	}
function connectdb(){
	include("dbinfo.php");
	mysql_connect($host,$user,$password);
	mysql_select_db($dbname) or die("Error Connecting to database");
	}

function showpost(){
	connectdb();
	echo '<a href="admin.php">Add Post</a>';
	$username=$_SESSION['username'];
	$query=mysql_query("select * from post where username='$username'") or die("Query Failed");
	while($row=mysql_fetch_array($query)){
		echo "<br><hr>";
		echo $row['title'];
		echo "<hr>";
		echo $row['post'];
		echo "<br><br>";
	}
		
}

function addpost($title,$post){
	connectdb();
	$username=$_SESSION['username'];
	$query=mysql_query("insert into post(id_no,username,post,title)values('','$username','$post','$title') ") or die ("Query Error");
	
}

?>