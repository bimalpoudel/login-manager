# List of function calls
SELECT CONCAT('SELECT ', function_name, '(', function_parameters, ');') AS login_functions FROM sqls_functions;

SELECT f_login_register_unapproved('{$reason_code}', '{$email_address}', '{$ip_address}', '{$isp_name}') login_code;
SELECT f_login_register_unapproved(1, '222');

DROP FUNCTION IF EXISTS f_login_register_unapproved;
DELIMITER $$
CREATE FUNCTION f_login_register_unapproved(
	_reason_code VARCHAR(255), 
	_login_email VARCHAR(255),
	_ip_address VARCHAR(255),
	_isp_name VARCHAR(255)
)
RETURNS VARCHAR(255)
BEGIN
	DECLARE _login_code VARCHAR(255);
	SET _login_code = MD5(CONCAT(NOW(), RAND()));
	INSERT INTO logins_upapproved(
		reason_code, login_email,
		login_code,
		login_ip, login_isp
	) VALUES (
		_reason_code, _login_email,
		_login_code,
		_ip_address, _isp_name
	);
	RETURN _login_code;
END $$