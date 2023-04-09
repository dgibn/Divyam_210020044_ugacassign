<!DOCTYPE html>
<html>
    <style>
     .item-image {
  background-image: url("bkgd.jpg");
  background-color: #cccccc;
  float:right;
}

    </style>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="style.css"> 
    </head>
    <br>
    <body>
    <img src="https://www.iitb.ac.in/sites/www.iitb.ac.in/themes/touchm/logo.png" onClick="myFunction2()" />
    <script>
        function myFunction2() {
        window.location.href="https://iitb.ac.in";
    }
    </script>
    <img src="https://gymkhana.iitb.ac.in/assets/logo/ugacads.png" onClick="myFunction3()" />
    <script>
        function myFunction3() {
        window.location.href="https://ugac.gymkhana.iitb.ac.in/";
    }
    </script>
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
