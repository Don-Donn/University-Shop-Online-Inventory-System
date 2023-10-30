<!--require session-->
<?php
session_start()
?>

<!DOCTYPE html>
<html>
    <head>

        <title>Login Page</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <link rel="stylesheet" href="../css/loginCustomer.css">

    </head>
    <body>
        <header id="header">
                <div>
                    <p id = "rgo">RESOURCE GENERATION OFFICE</p>
                </div>
                <div id = "location">
                    <h4>BatStateU Lipa</h4>
                </div>
        </header>
    <br>
    </br>

        <div id ="univ_text">
            <h2>University Shop Login</h2>
        </div>

        <div class="login_container">
        <form action="login.php" method="post">
            <p class="please-login">Please Login</p>

            <input type="text" id="email" name="email" placeholder="  Email address" required><br>

            <input type="password" id="password" name="password" placeholder="  Password" required><br>

            <button type="submit" name="login_user" id="login-button">Login</button>

            <p class="login-admin">
                <a class="login-admin" href="#">Login as an ADMIN?</a>
            </p>
        </form>
        </div>

    </body>
</html>