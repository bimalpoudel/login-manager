SELECT f_login('email', 'password');

DROP FUNCTION IF EXISTS f_login;
DELIMITER $$
CREATE FUNCTION f_login(_email_address VARCHAR(255), _login_password VARCHAR(255))
RETURNS BOOLEAN
BEGIN
	-- check for user name existence
	-- count the login

	SELECT COUNT(*) FROM logins_approved WHERE 
	
	RETURN TRUE;
END $$

/**
error_id	error_code	error_message
1	LOGIN	Username does not exist
2	LOGIN	Password does not match
3	LOGIN	User disabled by administrator (Compails receied)
4	LOGIN	User validity expired
5	LOGIN	Complains received against this user
6	LOGIN	User out of payments
7	LOGIN	User over logins per given time
8	LOGIN	Too many failure login attemps in a short time
*/
SELECT * FROM logins_errors;
