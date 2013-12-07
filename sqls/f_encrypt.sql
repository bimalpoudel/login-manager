SELECT f_encrypt('string');

DROP FUNCTION IF EXISTS f_encrypt;
DELIMITER $$
CREATE FUNCTION f_encrypt(_plain_string VARCHAR(255))
RETURNS VARCHAR(255)
BEGIN
	DECLARE _encrypted_string VARCHAR(255);
	
	SET _encrypted_string = _plain_string;
	RETURN _encrypted_string;
END $$