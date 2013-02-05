<?php
session_start();
include("functions.php");
if(!loggedin())
header("index.php?warn=1");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<script type="text/javascript" src="js/jquery.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
<?php 

echo "Hello  ".$_SESSION['username'];   
?>

</title>


<style >
#form{
	text-align:center;
	position:absolute;
	top:30%;
	left:40%;
	
}
#head{
	padding:10px;
	font-family:Tahoma, Geneva, sans-serif;
	font-weight:bold;
	width:100%;
	
	height:25px;
	
}
#lab{
	font-size:18px;
	font-weight:bold;
	
	
}
textarea{
	resize:vertical;
	
	
}
#text_area{
	resize:none;
	
	
}
</style>
<script>
function add_post(){
	
	var data=$("#add_post").serialize();
		 $.ajax({
                    type: "POST",
                    url: "addpost.php",
                    data: data,
                    dataType: "html",
                });
		
	
}
</script>

</head>


<body>
<div >

<div id="head">Add new post</div>
<br /><br />
<form id='add_post' class="add_post" method="post" action="addpost.php">

<label for="tittle" id="lab">Title</label> <br />
<textarea name="title"  cols="30" rows="1" id="text_area"></textarea><br  />
<label for="text" id="lab">Text-Please follow markdown formatting <a href="http://michelf.ca/projects/php-markdown/concepts/" target="_blank">Link</a><br /></label>
<textarea name="text"  cols="60" rows="20" ></textarea><br  />
<input type="submit"  />

</form>
</div>
</body>
</html>