<?php

class mysql
{
	function query($sql)
	{
		$result_set = mysql_query($sql) or die(mysql_error());
		$row = mysql_fetch_assoc($result_set);
		print_r($row);
	}
}

?>