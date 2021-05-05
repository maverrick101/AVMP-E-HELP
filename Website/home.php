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
?>
<a href="logout.php">Logout</a>






<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
  <link rel="stylesheet" type="text/css" href="CSS/home.css">
  <script>
  	function my_fun(str) {

	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	} else{
		xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange= function(){
		if (this.readyState==4 && this.status==200) {
			document.getElementById('poll').innerHTML = this.responseText;
		}
	}
	xmlhttp.open("GET","helper.php?value="+str, true);
	xmlhttp.send();

}
	




</script>
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
					<li><a href="Login.html">Login</a></li>
					<li><a href="Register.html">Register</a></li>
				</ul>
			</nav>
		</div>
	</header>


	


 
  
 <div style="margin: auto; width: 300px;">

	




	
</div>

<?php
$user=$_SESSION["loginuser"];
$query="SELECT * from registers where Email='$user'";



?>

<?php

$sql="SELECT * FROM request where userid='$user'";

$record=mysqli_query($conn,$sql);

?>


<table id="table">
			<tr>
				<th>Appliance</th>
				<th>Company</th>
				<th>model</th>
				<th>address</th>
				<th>problem</th>
				<th>Request Status</th>
				

			</tr>


			<?php

			while ($request1=mysqli_fetch_array($record)) {
				echo "<tr>";

				echo "<td>".$request1['appliance']."</td>";


				echo "<td>".$request1['company']."</td>";


				echo "<td>".$request1['model']."</td>";


				echo "<td>".$request1['address']."</td>";  


				echo "<td>".$request1['problem']."</td>";


				echo "<td>".$request1['status']."</td>";

				




				echo "</tr>";
			}

			?>

			</table>

		</tr>






 <div class="form">
	<h1>Request service</h1>
	<form name="form1" action="request.php" method="post">
		<div class="container">
			<div class="group">
				<label>Select your Appliance</label>
				<select id="appliance" name="appliance" onchange="my_fun(this.value);">
					<option name="appliance" value="mobile">Mobile Phone </option>
					<option name="appliance" value="ac">Air Conditioner</option>
					<option name="appliance" value="tv">T.V</option>
					<option name="appliance" value="laptop">Laptop</option>


				</select>
			
			
				<br>

	<div id="poll">
		<select>
			<option value="company">Select Brand</option>
		</select>
	</div>

			</div>
			<div class="group">
				<label>Model No</label>
				<input type="text" name="model"  required>
			</div>
			<div class="group">
				<label>your mobile no</label>
				<input type="number" name="mobileno" min="10" required >
			</div>
			<div class="group">
				<label>Your address</label>
				<input type="text" name="address"  required >
			</div>
			<div class="group">
				<label>Describe the Fault in your Appliance</label>
				<input type="text" name="problem"></input>
			</div>

			<input class="button" type="submit" value="submit">




  	






</div>




	<p>BUSINESS?
	   Want to partner with us?
	   Verify your Business <a href="verify.html">Here.</a> 
	</p>




<footer id="main-footer" class="container">
		<p>Copyright &copy;2021 AVMP E-HELP </p>
	</footer>


</body>
</html>