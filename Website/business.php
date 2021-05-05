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



  ?>
<a href="logout.php">Logout</a>



<!DOCTYPE html>
<html>
<head>
  <title>business</title>
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
		<h1>Business page</h1>
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






		<footer id="main-footer">
		<p>Copyright &copy;2021 AVMP E-HELP </p>
	</footer>
</body>
</html>