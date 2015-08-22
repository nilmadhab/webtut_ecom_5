	

	<?php 
	ini_set('display_errors', true);
	///$conn=mysqli_connect('localhost','webtutplus','webtutplus','webtut_ecomm')or die("cannot connect");
	$conn=mysqli_connect('localhost','root','25011994','ecomm')or die("cannot connect");
	if (!$conn) {
		echo "cannot connect";
	}

session_start();
	?>