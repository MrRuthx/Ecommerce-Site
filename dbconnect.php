<?php 
	
	$host='sql311.epizy.com';
	$username='epiz_32202711';
	$pass='o7VZ911YTRyQq1t';
	$db='epiz_32202711_user_info';

	$conn=mysqli_connect($host,$username,$pass,$db);

    // if($conn) {
    //     echo 'Connected';
    // }

	if(!$conn) die("Connection refused").mysql_connect_error();
 ?>