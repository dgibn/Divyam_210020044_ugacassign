<?php
 //check for required fields from the form
if ((!$_POST[author]) || (!$_POST[post_title])
    || (!$_POST[post_text])) {
    header("Location: view_post.php");
    exit;
}

 //connect to server and select database
$conn = mysqli_connect("localhost", "root", "")
    or die(mysqli_error());
mysqli_select_db("User",$conn) or die(mysqli_error());
 
 //create and issue the first query
$add_topic = "insert into forum_posts values ('', '$_POST[post_text]',
    now(), '$_POST[author]','$_POST[title]')";
mysqli_query($add_topic,$conn) or die(mysqli_error());

 //create nice message for user
$msg = "<P>The <strong>$_POST[post_title]</strong> post has been created.</p>";

