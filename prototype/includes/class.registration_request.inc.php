<?php
class registration_request
extends mysql
{
	function apply($reason_code='', $email_address='', $ip_address='', $isp_name='')
	{
		$apply_request_sql="SELECT f_login_register_unapproved('{$reason_code}', '{$email_address}', '{$ip_address}', '{$isp_name}') login_code;";
		$this->query($apply_request_sql);
	}
}
?>