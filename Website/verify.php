<?php
$name = filter_input(INPUT_POST, 'name');
$address = filter_input(INPUT_POST, 'address');
$contact = filter_input(INPUT_POST, 'contact');
$email = filter_input(INPUT_POST, 'email');
$image = filter_input(INPUT_POST, 'image');
$licence = filter_input(INPUT_POST, 'licence');



{
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}

else{
$sql = "INSERT INTO store (name,address,contact,email,image,licence)
values ('$name','$address','$contact','$email','$image','$licence')";
if ($conn->query($sql)){
echo "submitted successfully";
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