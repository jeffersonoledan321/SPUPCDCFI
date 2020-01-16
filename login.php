<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	

</head>
<body>

<div class="login-box">
	<h1>Login</h1>
	<form method="post" action="login_proc.php">
	<div class="textbox">
	<i class="fa fa-user" aria-hidden="true"></i>
		<input type="text" placeholder="Username" name="username" value="" autocomplete="off">
	</div>
	<div class="textbox">
	<i class="fa fa-lock" aria-hidden="true"></i>
		<input type="password" placeholder="Password" name="password" value="">
	</div>
	<input class="btn" type="submit" name="submit" value="Sign in">
	</form>
</div>




</body>
</html>