<?php

$link = mysqli_connect("localhost","root","","site");

if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_SESSION['id'])){
$id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id = '$id'";
$res =$link->query($sql);
$row = $res->fetch_assoc();

}

?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="upper_part_style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
    <meta charset="UTF-8">
    <title>Eriounios</title>
    <script type="text/javascript" src="scripts.js"></script>
</head>

<body>
<div class="upper_menu">
    <div class="topnav">
        <a href="index.php" class="active" ><img src="logo.png" class="logo"> </a>
        <a href="#" onclick="searchModalBox()"><div class="centered_text">Search</div></a>
        <a href="#contact"><div class="centered_text" >Contact</div> </a>
        <a href="#about"><div class="centered_text"> About</div> </a>

        <div class="dropdown" >
            <img src="q.png" style="border-radius:50%;margin-top:20%;margin-left: -65%">
            <button class="dropbtn"  style="">
                <!--                                --><?php
                if($row['username']!= NULL) echo $row['username'];
                else echo "guest";
                //                            ?>
            </button>

            <div class="dropdown-content">
                <?php  if($_SESSION['id']!=NULL){?>
                <a href="id.php">My Page</a>
                <a href="index.html">Log Out</a>
                <?php }?>
                <?php if($_SESSION['id']==NULL){?>
                <a href="#" onclick="registerModal()"> Log in / Register</a>
                <?php }?>
            </div>
        </div>

    </div>
</div>
</body>
</html>