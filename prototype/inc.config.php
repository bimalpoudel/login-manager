<?php
mysql_connect('localhost', 'root', 'toor');
mysql_select_db('login');

function __autoload($class_name='')
{
	require_once('includes/class.'.$class_name.'.inc.php');
}

#require_once('includes/class.mysql.inc.php');
#require_once('includes/class.registration_request.inc.php');
?>