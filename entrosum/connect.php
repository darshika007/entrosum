<?php
$db = mysqli_connect('localhost', 'root', '1234567890');
if (!$db){
    die("Database Connection Failed".mysqli_error($db));
}
$select_db = mysqli_select_db($db, 'entrosum');
if (!$select_db){
    die("Database Selection Failed".mysqli_error($db));
}
?>
