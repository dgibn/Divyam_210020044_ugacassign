<!DOCTYPE html>
<html>
    <left><img src="https://www.iitb.ac.in/sites/www.iitb.ac.in/themes/touchm/logo.png" onClick="myFunction2()"></left>
    <script>
        function myFunction2() {
        window.location.href="https://iitb.ac.in";
    }
    </script>
    <br>
    <br>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="style.css"> 
    </head>
    <body>
        <form action="login.php" method="post"> 
            <h2>LOGIN</h2>
            <label>User Name</label>
            <input type="text" name="uname" placeholder="User Name"><br>
            <label>Password</label>
            <input type="password" name="password" placeholder="password"><br>
            <button type="submit">Login</button>
        </form>
    </body>
</html>
