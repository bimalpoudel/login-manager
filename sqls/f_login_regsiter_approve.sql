/**
* Transfers a login from unapproved zone to an approved zone
*/
DROP FUNCTION IF EXISTS f_login_regsiter_approve;
DELIMITER $$
CREATE FUNCTION f_login_regsiter_approve(_login_id INTEGER(10) UNSIGNED, _login_code VARCHAR(255))
RETURNS BOOLEAN
BEGIN
	/**
	* @todo Make sure that it pre-checks the login
	*/
	
	INSERT INTO logins_approved(login_email, is_approved)
	SELECT
		login_email,
		'Y'
	FROM logins_upapproved
	WHERE
		login_id=_login_id
		AND login_code=_login_code
		AND is_approved='N'
	;
	
	UPDATE logins_upapproved SET login_code='333', is_approved='Y' WHERE login_id=_login_id AND login_code=_login_code;
	
	RETURN TRUE;
END $$
SELECT f_login_regsiter_approve(1, '222');