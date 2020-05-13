<?php
session_start();
$link = mysqli_connect("localhost","root","","site");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_SESSION['id'])){
$id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id = '$id'";
$res =$link->query($sql);
$row = $res->fetch_assoc();
//echo $row['username'];
}
ob_end_clean();

include 'header.php'

?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="upper_part_style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
    <meta charset="UTF-8">
    <title>Eriounios</title>
    <script type="text/javascript" src="scripts.js"></script>
</head>

<body>

<div id="myOverlay" class="overlay">-->
        <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
        <div class="overlay-content">
            <form method="Get">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit" class="search_submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <div id="register_box" class="overlay_reg">
        <span class="closebtn_reg" onclick="closeRegister()" title="Close Register Overlay">×</span>
        <div class="overlay-content_reg">
            <div class="tab_back">
                <div class="tab">

                    <button class="tablinks" onclick="openTab(event, 'LoginForm')">Log in</button>
                    <button class="tablinks" onclick="openTab(event, 'RegisterForm')">Register</button>
                </div>
                <div id="LoginForm" class="tabcontent" style="display: block">
                    <div class="form_log_field">
                        <form method="POST" action="login.php" name="log">
                            <label>Username</label>
                            <input type="text" name="username" id = "username">
                            <label>Password</label>
                            <input type="password" name="password" id = "password">
                            <button class="submitbtn" style="margin-left: 10%" > Log in</button>
                        </form>
                    </div>
                </div>
                <div id="RegisterForm" class="tabcontent">
                    <div class="form_reg_field">
                        <form method="POST" action="http://localhost/site_speedrun/register.php"  name="reg">
                            <label>Username</label>
                            <input type="text" id ="name" name="username">
                            <label>Password</label>
                            <input type="password" id="newPassword" name="newPassword">
                            <label>Confirm Password</label>
                            <input type="password" name="confPassw" id="confPassw">
                            <button class="submitbtn" style="margin-left: 50%" onclick="Validate()"> Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>



<div class="main">
    <div class="posts_main_ext">
        <div class="posts_main">

            <div class="latest" >
                <button class="btn">hello</button>
                <h5 class="txt">some text</h5>

                <?php
                $sql = "SELECT * FROM posts";
                $sql = "SELECT * FROM posts order by id DESC LIMIT 10";
                $posts =$link->query($sql);
                $result = $posts->fetch_assoc();
                foreach ($posts as $result):
                    ?>

                    <div class = "post_tmp">
                        <div class="post_content">
                            <div class="autor_data">
                                <a class="post_aut_img" href="localhost/AutorID">
<!--                                    <img src="--><?php //$result['image_url']?><!--">-->
                                </a>
                                <h5 class="post_author">
                                    <a class="author" href="localhost/AutorID">
                                        <?php
                                        $rui =  $result['userid'];
                                        $sql = "SELECT * FROM users WHERE id = '$rui'";
                                        $resus =$link->query($sql);
                                        $r = $resus->fetch_assoc();
                                        echo $r['username'];
                                        ?>

                                    </a>
                                    <a href="#" class="tags"><?php echo "tags" ?></a>
                                    <div class><?php echo $result['date']?></div>
                                    <div class="inner">
                                        <div class="image_lightbox">
                                            <img src="1.jpg" onclick="openLightBox();currentSlide(1)" class="hover_shadow">
                                            <img src="2.jpg" onclick="openLightBox();currentSlide(2)" class="hover_shadow">
                                            <img src="3.jpg" onclick="openLightBox();currentSlide(3)" class="hover_shadow">
                                        </div>
                                    </div>
                            </div>
                            <div class="text" ><?php echo $result['text']; ?></div>
                            <div class="buttons">
                                <?php
                                if (($result['userid'] != $_SESSION['id'])&&($_SESSION['id']!=NULL))
                                {?>
                                    <button class="like" onclick="likepressed()">L</button>
                                <?php }
                                ?>
                                <div class="like_count"></div>
                                <?php
                                if (($result['userid'] == $_SESSION['id'])&&($_SESSION['id']!=NULL))
                                {?>
                                    <button class="edit" onclick="editpressed()">E</button>
                                    <button class="delete" onclick="deletepressed()">D</button>
                                <?php }
                                ?>
                                <div class="last_edited"></div>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;?>
            </div>
        </div>
    </div>
</div>

</body>
</html>