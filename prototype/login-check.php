<?php
/*
print_r($_POST);
Array
(
    [login] => Array
        (
            [email] => email@domain.com
            [password] => password
            [captcha] => captcha
        )

    [login-submit] => Login
)
*/
require_once('inc.config.php');

$email = $_POST['login']['email'];
$password = $_POST['login']['password'];
$captcha = $_POST['login']['captcha'];

$login_check = new login_check();
$login_check->login($email, $password, $captcha);
?>