<!DOCTYPE html>
<html>
    <img src="https://www.iitb.ac.in/sites/www.iitb.ac.in/themes/touchm/logo.png" onClick="myFunction2()">
    <script>
        function myFunction2() {
        window.location.href="https://iitb.ac.in";
        }
    </script>

    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="style.css"> 
    </head>
    <body>
        <button type="submit" onClick="myFunction()">Login</button><br>
        <button type="submit" onClick="myFunction1()">New User</button><br>
        <script>
        function myFunction() {
        window.location.href="index.php";
        }
        </script>
        <script>
        function myFunction1() {
        window.location.href="new_user.php";
        }
        </script>
    </body>
</html>
