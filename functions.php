<?php

function check_login($conn)
{

	if(isset($_SESSION['id']))
	{

		$id = $_SESSION['id'];
		$name = $_SESSION['name'];
		$query = "select * from registration where id = '$id', name = '$name' limit 1";

		$result = mysqli_query($conn,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: login.php");
	//echo '<script>alert("Welcome to Ratnakala")</script>'; 
	die;

}

function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}