<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Manager</title>
<link href="css/login.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h2>Login (existing users)</h2>
<form id="login" name="login" method="post" action="login-check.php">
	<p>
		<label for="login-email">Email Address:</label>
		<input type="text" name="login[email]" id="login-email" placeholder="email@domain.com" value="" />
	</p>
	<p>
		<label for="login-pasword">Password:</label>
		<input type="password" name="login[password]" id="login-password" placeholder="password" value="" />
	</p>
	<p>Stop automated logins: <img src="images/captcha.png" alt="captcha" class="captcha" width="84" height="27" /></p>
	<p>
		<label for="login-captcha">Type Captcha Code:</label>
		<input type="text" name="login[captcha]" id="login-captcha" />
	</p>
	<p>
		<input type="submit" name="login-submit" id="login-submit" value="Login" />
	</p>
</form>
<p>Not a member yet? <a href="register.php">Register now</a>.</p>
<script type="text/javascript" src="js/autocomplete-login.js"></script>
</body>
</html>
