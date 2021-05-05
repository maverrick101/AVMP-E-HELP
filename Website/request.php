<?php
session_start();
$user=$_SESSION["loginuser"];
$query="SELECT * from registers where Email='$user'";




$appliance = filter_input(INPUT_POST, 'appliance');
$company = filter_input(INPUT_POST, 'company');
$model = filter_input(INPUT_POST, 'model');
$mobileno = filter_input(INPUT_POST, 'mobileno');
$address = filter_input(INPUT_POST, 'address');
$problem = filter_input(INPUT_POST, 'problem');
{
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO request (appliance,company,model,mobileno,address,problem,userid)
values ('$appliance','$company','$model','$mobileno','$address','$problem','$user')";
if ($conn->query($sql)){
echo "Request submitted sucessfully";
    die;
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}

?>