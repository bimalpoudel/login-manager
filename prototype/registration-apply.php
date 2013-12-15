<?php
/*
# print_r($_POST);
Array
(
    [apply] => Array
        (
            [email] => email@domain.com
            [purpose] => reason-code
        )

    [request-submit] => Request me a registration
)
*/
require_once('inc.config.php');

$reason_code = $_POST['apply']['purpose'];
$email_address = $_POST['apply']['email'];
$ip_address = $_SERVER['REMOTE_ADDR'];
$isp_name = gethostbyaddr($ip_address);

$registration_request = new registration_request();
$registration_request->apply($reason_code, $email_address, $ip_address, $isp_name);
?>