<?php 

session_start(); 

include "db_conn.php";


$sql = "SELECT * FROM forum_posts ";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) >= 1) {

    $row = mysqli_fetch_assoc($result);
    echo $row;

}
else{

    header("Location: view_post.php");
    
    exit();
    
}



