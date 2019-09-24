<?php
 $host='localhost';
	 $db_user='root';
	 $db_password='';
	 $db='samaj';
	 $conn=mysqli_connect($host,$db_user,$db_password) or die(mysqli_error());
	 mysqli_select_db($db) or die(mysqli_error);
	 ?>