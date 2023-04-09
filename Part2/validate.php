<!DOCTYPE html>
<html>
 
<head>
    <title>Inserted</title>
</head>
 
<body>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => User
        $conn =mysqli_connect("localhost", "root", "", "User");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        $name =  $_POST['name'];
        $username = $_POST['username'];
        $password =  $_POST['password'];
        // Performing insert query execution
        // table name is details
        $sql = "INSERT INTO details  VALUES ('$name','$username','$password')";
        mysqli_query($conn,$sql);
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$name");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </body>
 
</html>