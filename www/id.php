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
include 'header.php'
?>
    <!DOCTYPE html>
    <html lang="en">
    <link rel="stylesheet" href="id.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <head>
        <meta charset="UTF-8">
        <title>Eriounios</title>
        <script type="text/javascript" src="scripts.js"></script>
    </head>
<body>
<div id="myOverlay" class="overlay">
        <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
        <div class="overlay-content">
            <form method="Get">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit" class="search_submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <div class="main" style="width: 100%">
    <div class="posts_main_ext" style="width: 80%">
        <div class="user" >
            <div class="user_info">
                <h5><?php echo $row['username']?></h5>
                <img src="<?php $row['image_url']?>">
                <img src="q.png">
                <button name="change_img" onclick="">change image</button>
                <h5><?php echo "get here a column for user info"?></h5>
            </div>
            <div class="user_tab"style="">
                <button class="tablinks" onclick="openTab(event,'posts_archive')">archive</button>
                <button class="tablinks" onclick="openTab(event,'new')">new</button>
            </div>
        </div>

<div class="tabcontent" id="posts_archive" name="archive" style="display: block">
    <div class="backgound">
               <?php
    $sql = "SELECT * FROM posts WHERE userid = '$id' order by id DESC";
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
                    if ($result['userid'] != $_SESSION['id'])
                    {?>
                        <button class="like" onclick="likepressed()">L</button>
                    <?php }
                    ?>
                    <div class="like_count"></div>
                    <?php
                    if ($result['userid'] == $_SESSION['id'])
                    {?>
                        <button class="edit" onclick="editpressed()">E</button>
                        <button class="delete" onclick="deletepressed()">D</button>
                    <?php }
                    ?>
                    <div class="last_edited"></div>
                </div>
            </div>
        </div>
    <?php endforeach;?>
    </div>
</div>

<div class="tabcontent" id="new">
    new
    <form method="post" action="post.php" class="write_post">
        <input type="text" name="text" id="text">
    </form>
</div>
    </div>
    </div>
</body>
</html>