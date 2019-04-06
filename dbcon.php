<?php	
		$mysql_host='localhost';
		$mysql_user='root';
		$mysql_pass='';
		$mysql_db='fym';
		if($conn=mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db))
			$p=1;
		else
			die(mysql_error());

?>