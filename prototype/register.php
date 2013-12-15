<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Manager</title>
<link href="css/login.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>Login Manager System</h1>
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
</form>
<p>Please wait for approval after you apply. We will send you an email with confirmation.</p>
</body>
</html>
