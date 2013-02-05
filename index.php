<?php
include("functions.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="js/jquery.js">
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mirage</title>
<style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <script>
	function login(){

		var data=$("#login_form").serialize();
		 $.ajax({
                    type: "POST",
                    url: "login.php",
                    data: data,
                    dataType: "html",
                });
		
	}
	
	</script>
</head>

<body>

<?php

checkerror();
session_start();

if(loggedin()){
	echo '<a href="logout.php">Logout</a><br>';
	showpost();
}

else {
	echo '
<div class="container">
<form class="form-signin login_form" id="login_form" method="post" action="login.php" >
<h3>Login</h3>
        <input type="text" class="input-block-level" placeholder="Username" name="username">
        <input type="password" class="input-block-level" placeholder="Password" name="password">

        <button class="btn btn-large btn-primary" type="submit" >Submit</button>
      </form>

    </div>	
	';
	
	
}

?>

</body>
</html>
