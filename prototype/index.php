<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Manager</title>
<link href="css/login.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>Login Manager System</h1>
<ul>
	<li>Home</li>
	<li>About</li>
	<li>Profiles</li>
	<li>Contact</li>
	<li>Jobs</li>
	<li>Careers</li>
	<li>Why, Mission, Vision, Usage</li>
	<li>Authority</li>
	<li>Clients</li>
</ul>
<h2>Apply for a login (new registration request)</h2>
<form id="registration-apply" name="registration-apply" method="post" action="registration-apply.php">
	<p>
		<label for="email_address">Valid Email Address</label>
		<input type="text" name="apply[email]" id="email_address" placeholder="email@domain.com" value="" />
	</p>
	<p>
		<label for="apply_purpose">Promotional / Purpose / Category Code:</label>
		<input type="text" name="apply[purpose]" id="apply_purpose" placeholder="REASON-CODE" value="" />
	</p>
	<p>
		<input type="submit" name="request-submit" id="request-submit" value="Request me a registration" />
	</p>
	<p>Please wait for approval after you apply.</p>
</form>
<h2>Login (existing users)</h2>
<form id="login" name="login" method="post" action="login-check.php">
	<p>
		<label for="login-email">Email Address:</label>
		<input type="text" name="login[email]" id="login-email" placeholder="email@domain.com" value="" />
	</p>
	<p>
		<label for="login-pasword">Password:</label>
		<input type="text" name="login[password]" id="login-password" placeholder="password" value="" />
	</p>
	<p><img src="images/captcha.png" width="84" height="27" />
		<label for="login-captcha">Captcha Code:</label>
		<input type="text" name="login[captcha]" id="login-captcha" />
	</p>
	<p>
		<input type="submit" name="login-submit" id="login-submit" value="Login" />
	</p>
</form>
</body>
</html>
