<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Manager</title>
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
	<p>Promotional / Purpose / Category Code:
		<label for="apply_purpose"></label>
		<input type="text" name="apply[purpose]" id="apply_purpose" placeholder="REASON-CODE" value="" />
	</p>
	<p>
		<input type="submit" name="request-submit" id="request-submit" value="Request me a registration" />
	</p>
	<p>Please wait for approval after you apply.</p>
</form>
<h2>Login (existing users)</h2>
<form id="form2" name="form2" method="post" action="">
	<p>
		<label for="textfield2"></label>
	Email Address:
	<input type="text" name="textfield2" id="textfield2" />
	</p>
	<p>
		<label for="textfield3"></label>
		Password: 
		<input type="text" name="textfield3" id="textfield3" />
	</p>
	<p>Captcha Code: <img src="images/captcha.png" width="84" height="27" />
		<label for="textfield4"></label>
		<input type="text" name="textfield4" id="textfield4" />
	</p>
	<p>
		<input type="submit" name="button2" id="button2" value="Login" />
	</p>
</form>
</body>
</html>
