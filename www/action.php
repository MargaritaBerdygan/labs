<?php
session_start();
$link = mysqli_connect("localhost", "root", "","site");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

