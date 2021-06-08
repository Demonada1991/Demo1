<?php
	include ("dbh.inc.php");
	if(isset($_POST['submit']))
	{
		$first = mysqli_real_escape_string($conn,$_POST['first']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$number = mysqli_real_escape_string($conn,$_POST['number']);

 	if(empty($first)||empty($email)||empty($number))
 	{
 			header("Location: ../sign.php");
 			exit();
 	}
 	else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
 	{
 		header("Location: sign.php?sign=invalidemail");
 		exit();
 	}

else
{
	$sql = "INSERT INTO login (first,email,number,slot) VALUES ('$first', '$email','$number','2');";
	mysqli_query($conn, $sql);
	setcookie('username', "$number", time()+2900);
	setcookie('score', "0", time()+2900);

	header("Location: intro.php");
}
	}


	?>
