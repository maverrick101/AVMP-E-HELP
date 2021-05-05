<?php
session_start();

{
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
}

if($_SESSION["loginuser"]==true)
{echo "Welcome"." ". $_SESSION["loginuser"];
}
else{
	header('location:login.html');
}

$sql="SELECT * FROM request";

$record=mysqli_query($conn,$sql);

$sql1="SELECT * FROM registers";

$record1=mysqli_query($conn,$sql1);

$sql2="SELECT * FROM store";

$record2=mysqli_query($conn,$sql2);




?>


<a href="logout.php">Logout</a>


<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
<header>
		<div class="container">

			<div id="head">
				 <h1>AVMP E-HELP</h1>
			</div>

			<nav id="navbar">
				<ul>
					<li><a href="index.html">HOME</a></li>
					<li><a href="About Us.html">About US</a></li>
					<li><a href="contact.html">Contact US</a></li>
				</ul>
			</nav>
		</div>
	</header>


	<H1>admin page</H1>



		<table id="table">
			<tr>
				<th>appliance</th>
				<th>company</th>
				<th>model</th>
				<th>mobileno</th>
				<th>address</th>
				<th>problem</th>

			</tr>

			<?php

			while ($request=mysqli_fetch_array($record)) {
				echo "<tr>";

				echo "<td>".$request['appliance']."</td>";


				echo "<td>".$request['company']."</td>";


				echo "<td>".$request['model']."</td>";


				echo "<td>".$request['mobileno']."</td>";  


				echo "<td>".$request['address']."</td>";


				echo "<td>".$request['problem']."</td>";




				echo "</tr>";
			}

			?>

		</table>

		</tr>


		<table id="table">
			<tr>
				<th>UserName</th>
				<th>MobileNo</th>
				<th>Email</th>
				<th>Password</th>
				<th>role</th>
				

			</tr>


			<?php

			while ($request1=mysqli_fetch_array($record1)) {
				echo "<tr>";

				echo "<td>".$request1['UserName']."</td>";


				echo "<td>".$request1['MobileNo']."</td>";


				echo "<td>".$request1['Email']."</td>";


				echo "<td>".$request1['Password']."</td>";  


				echo "<td>".$request1['role']."</td>";


				




				echo "</tr>";
			}

			?>

			</table>

		</tr>





			<table id="table">
			<tr>
				<th>name</th>
				<th>address</th>
				<th>contact</th>
				<th>email</th>
				<th>image</th>
				<th>licence</th>

			</tr>



			<?php

			while ($request2=mysqli_fetch_array($record2)) {
				echo "<tr>";

				echo "<td>".$request2['name']."</td>";


				echo "<td>".$request2['address']."</td>";


				echo "<td>".$request2['contact']."</td>";


				echo "<td>".$request2['email']."</td>";  


				echo "<td>".$request2['image']."</td>";


				echo "<td>".$request2['licence']."</td>";




				echo "</tr>";
			}

			?>

			</table>

		</tr>







<footer id="main-footer">
		<p>Copyright &copy;2021 AVMP E-HELP </p>
	</footer>
</body>
</html>