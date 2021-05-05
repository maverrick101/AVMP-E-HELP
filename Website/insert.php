<?php
$UserName = filter_input(INPUT_POST, 'UserName');
$MobileNo = filter_input(INPUT_POST, 'MobileNo');
$Email = filter_input(INPUT_POST, 'Email');
$Password = filter_input(INPUT_POST, 'Password');

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
$sql = "INSERT INTO registers (UserName,MobileNo,Email,Password)
values ('$UserName','$MobileNo','$Email','$Password')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
header("Location: Login.html");
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