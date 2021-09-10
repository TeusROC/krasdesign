<?php
$name = $_POST['name'];
$password = $_POST['password'];

echo $name;
echo $password;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logintest2";

$conn = mysqli_connect($servername, $username, $password ,$dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>


?>
<html lang="en">
<head>
    <title>welkom</title>

    <style>
    </style>

</head>
</body>
</html>
