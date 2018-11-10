<?php
$servername = "localhost";
$username = "root";
$password = "1234567890";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    exit();
}
echo "Connected successfully";

$conn = mysqli_connect('localhost', 'root','1234567890');
if (!$conn){
    die("Database Connection Failed".mysqli_error($conn));
    exit();
}
$select_conn = mysqli_select_db($conn, 'entrosum');
if (!$select_conn){
    die("Database Selection Failed".mysqli_error($conn));
    exit();
}
$db=mysqli_connect('localhost', 'root', '1234567890','entrosum');
 ?>
