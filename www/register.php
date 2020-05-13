<?php
session_start();
$link = mysqli_connect("localhost", "root", "","site");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);
$username = $_POST['username'];
if($_POST['newPassword']==$_POST['confPassw']) {
    $imageurl = 'localhost/site_speedrun/q.png';
    $password = $_POST['newPassword'];
    $sql = "INSERT INTO users(username, password,image_url) VALUES($username, $password,$imageurl)";
    if ($link->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $link->error;
    }
    ob_end_clean();
}
else {

    echo file_get_contents('http://localhost/site_speedrun/index.html');
    $text = "password doesn't match";

    mail($_POST['username'],text, "help");


}

mysqli_close($link);
echo file_get_contents('http://localhost/site_speedrun/index.html');
exit;
?>