# List of function calls
SELECT CONCAT('SELECT ', function_name, '(', function_parameters, ');') AS login_functions FROM sqls_functions;

SELECT f_login_regsiter_unapproved('{$email_address}');
SELECT f_login_regsiter_approve(1, '222');

DROP FUNCTION IF EXISTS f_login_regsiter_unapproved;
DELIMITER $$
CREATE FUNCTION f_login_regsiter_unapproved(_login_email VARCHAR(255))
RETURNS BOOLEAN
BEGIN
	INSERT INTO logins_upapproved(login_email, login_code) VALUES (_login_email, '');
	RETURN TRUE;
END $$