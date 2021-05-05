<?php
session_start();
error_reporting(E_ALL);

{
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
}


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{

$role = "";

if(isset($_POST['submit']));
{
	$Email=$_POST['Email'];
	$Password=$_POST["Password"];
	$query="select * from registers where Email='$Email' and Password='$Password'";

	$result=mysqli_query($conn,$query);
	if (mysqli_num_rows($result) ) 
	{
		while ($row = mysqli_fetch_assoc($result))
		 {
			if($row["role"] == "admin")
			{
				$_SESSION['loginuser'] = $row["Email"];
				header('Location: admin.php');
			}
			else if ($row['role'] == "customer") {

				$_SESSION['loginuser'] = $row["Email"];
				header('Location: home.php');
				# code...
			}
			else if ($row["role"] == "business") {

				$_SESSION['loginuser'] = $row["Email"];
				header('Location: business.php');
				# code...
			}
		}
	}
	else{
		echo "invalid email or password";
	}


}

	





	}



?>