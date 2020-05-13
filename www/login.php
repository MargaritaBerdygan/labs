<?php
session_start();
$link = mysqli_connect("localhost","root","","site");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Print host information
echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$res =$link->query($sql);
$row = $res->fetch_assoc();
$id = $row['id'];

echo $id;
//$ID = $_POST[$id];
ob_end_clean();
if($res->num_rows==0) {
    echo file_get_contents("http://localhost/site_speedrun/src/index.html");
}

//echo $id;

$_SESSION["id"] = $id;

header('Location: http://localhost/site_speedrun/index.php');
exit;
//echo file_get_contents('http://localhost/site_speedrun/index.php');

$link->close();
?>