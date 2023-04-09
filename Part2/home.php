<?php
session_start();
if (isset($_SESSION["id"]) && isset($_SESSION["username"])) {
    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>UGAC Login</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <h1> Welcome Back,<?php echo $_SESSION["username"];?></h1>
    <div id="logout">
        <a href="logout.php">Logout</a>
    </div>
    <br>
    <br>
    <div id="logout">
        <a href="post.php">New Post</a>
    </div>
    <br>
    <br>
    <div id="logout">
        <a href="view_post.php">See Posts</a>
    </div>
    
    </html>
    <?php
}
else{
    header("Location:index.php");
    exit();
}
?>