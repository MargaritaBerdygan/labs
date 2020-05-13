<?php
session_start();
$link = mysqli_connect("localhost","root","","site");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);
$userid = $_SESSION['id'];
echo $userid;
$text = $_POST['text'];
echo $text;
$sql = "INSERT INTO posts(userid, text) VALUES('$userid', '$text')";
if ($link->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}
ob_end_clean();
mysqli_close($link);
header('Location: http://localhost/site_speedrun/id.php');
exit;
?>