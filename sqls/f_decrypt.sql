SELECT f_decrypt('string');
SELECT f_decrypt(f_encrypt('string'));

DROP FUNCTION IF EXISTS f_decrypt;
DELIMITER $$
CREATE FUNCTION f_decrypt(_encrypted_string VARCHAR(255))
RETURNS VARCHAR(255)
BEGIN
	DECLARE _decrypted_string VARCHAR(255);
	
	SET _decrypted_string = _encrypted_string;
	RETURN _decrypted_string;
END $$