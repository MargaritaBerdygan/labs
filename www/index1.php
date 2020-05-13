<?php
//session_start();
//$link = mysqli_connect("localhost","root","","site");
//// Check connection
//if($link === false){
//    die("ERROR: Could not connect. " . mysqli_connect_error());
//}
//
//if(isset($_SESSION['id'])){
//$id = $_SESSION['id'];
//$sql = "SELECT * FROM users WHERE id = '$id'";
//$res =$link->query($sql);
//$row = $res->fetch_assoc();
////echo $row['username'];
//}
//ob_end_clean();
//?>
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<link rel="stylesheet" href="style.css">-->
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>Eriounios</title>-->
<!--    <script type="text/javascript" src="scripts.js"></script>-->
<!--</head>-->
<!--<body>-->
<!--<header class ="upper_menu"  role="banner">-->
<!--    <div class="topnav" id="myTopnav" style="">-->
<!--        <a href="index.php" class="active" ><img src="logo.png" class="logo"> </a>-->
<!--        <a href="#" onclick="searchModalBox()"><i class="fa fa-fw fa-search"></i></a>-->
<!--        <a href="#contact">Contact</a>-->
<!--        <a href="#about">About</a>-->
<!---->
<!--        <div class="dropdown">-->
<!--            <button class="dropbtn">-->
<!--                <img src="q.png"style="border-radius: 50%">-->
<!--                <button class="dropbtn" >-->
<!--                    --><?php
//                if($row['username']!= NULL) echo $row['username'];
//                else echo "guest";
//                ?>
<!--             </button>-->
<!--            <div class="dropdown-content">-->
<!--                <a href="id.php">My Page</a>-->
<!--                <a href="index.html">Log Out</a>-->
<!--                <a href="#" onclick="registerModal()"> Log in / Register</a>-->
<!--            </div>-->
<!--        </div>-->
<!--        <a href="javascript:void(0);" class="icon" onclick="myFunction()">-->
<!--            <i class="fa fa-bars"></i>-->
<!--        </a>-->
<!--    </div>-->
<!--</header>-->
<!--<div id="myOverlay" class="overlay">-->
<!--    <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>-->
<!--    <div class="overlay-content">-->
<!--        <form method="Get">-->
<!--            <input type="text" placeholder="Search.." name="search">-->
<!--            <button type="submit" class="search_submit"><i class="fa fa-search"></i></button>-->
<!--        </form>-->
<!--    </div>-->
<!--</div>-->
<!--<div id="register_box" class="overlay_reg">-->
<!--    <span class="closebtn_reg" onclick="closeRegister()" title="Close Register Overlay">×</span>-->
<!--    <div class="overlay-content_reg">-->
<!--        <div class="tab_back">-->
<!--            <div class="tab">-->
<!---->
<!--                <button class="tablinks" onclick="openTab(event, 'LoginForm')">Log in</button>-->
<!--                <button class="tablinks" onclick="openTab(event, 'RegisterForm')">Register</button>-->
<!--            </div>-->
<!--            <div id="LoginForm" class="tabcontent" style="display: block">-->
<!--                <div class="form_log_field">-->
<!--                    <form method="POST" action="login.php" name="log">-->
<!--                        <label>Username</label>-->
<!--                        <input type="text" name="username" id = "username">-->
<!--                        <label>Password</label>-->
<!--                        <input type="password" name="password" id = "password">-->
<!--                        <button class="submitbtn" style="margin-left: 10%" onclick="LogIn()" > Log in</button>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div id="RegisterForm" class="tabcontent">-->
<!--                <div class="form_reg_field">-->
<!--                    <form method="POST" action="http://localhost/site_speedrun/register.php"  name="reg">-->
<!--                        <label>Username</label>-->
<!--                        <input type="text" id ="name" name="username">-->
<!--                        <label>Password</label>-->
<!--                        <input type="password" id="newPassword" name="newPassword">-->
<!--                        <label>Confirm Password</label>-->
<!--                        <input type="password" name="confPassw" id="confPassw">-->
<!--                        <button class="submitbtn" style="margin-left: 50%" onclick="Validate()"> Register</button>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</div>-->
<!--<div class="app" style="margin-top: 100px">-->
<!--        <div class="main_part">-->
<!--<!--            <div class="tab_main"style="position: relative">-->-->
<!--<!--                <button class="latest_btn" id="latest" name="latest">latest</button>-->-->
<!--<!--                <button class="best_btn" id="best" name="best">best</button>-->-->
<!--<!--            </div>-->-->
<!--            <div class="tab_main" style="position: relative">-->
<!--                <div class="latest" style="margin-top: 10px; margin-left: 50px; background-color: #999999">-->
<!--                    --><?php
//                    $sql = "SELECT * FROM posts";
//                    $sql = "SELECT * FROM posts order by id DESC LIMIT 10";
//                    $posts =$link->query($sql);
//                    $result = $posts->fetch_assoc();
//                    foreach ($posts as $result):
//                    ?>
<!--                    <div class="post" id = "--><?php //$result['userid'] ?><!--" style="background-color: #dddddd; border-radius: 5px; border-color: #555555; position: relative">-->
<!--                        <div class="author">-->
<!--                            <div class="aut_img">-->
<!--<!--                                <img src="-->--><?php //// $result['image_url']?><!--<!--">-->-->
<!--                            </div>-->
<!--                            <div class="info_block"-->
<!--                                 <a href="--><?php // echo $result['userid']?><!--">-->
<!--                                     --><?php
//                                     $rui =  $result['userid'];
//                                     $sql = "SELECT * FROM users WHERE id = '$rui'";
//                                     $resus =$link->query($sql);
//                                     $r = $resus->fetch_assoc();
//                                     echo $r['username'];
//                                     ?>
<!--                                 </a>-->
<!--                        </div>-->
<!--                        </div>-->
<!--                        <div class="inner_post">-->
<!--                            <div class="text_block">-->
<!--                                --><?php //echo $result['text']; ?>
<!--                            </div>-->
<!--                            <div class="img_buffer">-->
<!--                                <img src>-->
<!--                                <img src>-->
<!--                                <img src>-->
<!--                            </div>-->
<!--                            <div class="buttons_block">-->
<!--                                --><?php
//                                if ($result['userid'] != $_SESSION['id'])
//                                {?>
<!--                                    <button class="like" onclick="likepressed()">L</button>-->
<!--                                --><?php //}
//
//                                ?>
<!--                                <div class="like_count"></div>-->
<!--                                --><?php
//                                if ($result['userid'] == $_SESSION['id'])
//                                {?>
<!--                                    <button class="edit" onclick="editpressed()">E</button>-->
<!--                                    <button class="delete" onclick="deletepressed()">D</button>-->
<!--                                --><?php //}
//
//                                ?>
<!--                                <div class="last_edited"></div>-->
<!--                            </div>-->
<!--                    </div>-->
<!--                    --><?php //endforeach;?>
<!--                </div>-->
<!--    </div>-->
<!--</div>-->
<!--<!---->-->
<!--<!---->-->
<!--<!---->-->
<!--<!---->-->
<!--<!--<footer class="footer" id="contact">-->-->
<!--<!--    <div class="about" id="about">-->-->
<!--<!--        smth smth smth-->-->
<!--<!--    </div>-->-->
<!--<!--    <div class="contact">-->-->
<!--<!--        <a href> gmail.com</a>-->-->
<!--<!--        <a href> some link</a>-->-->
<!--<!--    </div>-->-->
<!--<!--</footer>-->-->
<!--<!---->-->
<!--</body>-->
<!---->
<!---->
<!--</html>-->