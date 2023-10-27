<!--require session-->

<!DOCTYPE html>
<html>
    <head>

        <title>Admin Login Page</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <link rel="stylesheet" href="../css/loginAdmin.css">

    </head>
    <body>
        <header id="header">
            <div>
                <p id = "rgo">RESOURCE GENERATION OFFICE</p>
            </div>
            <div id = "location">
                <h4>BatStateU Lipa, Marawoy, Lipa City</h4>
            </div>
        </header>
    <br>
    </br>

        <div id ="univ_text">
            <h2>University Shop Login</h2>
        </div>

        <div class="login_container">
        <form action="login.php" method="post">
            <p class="admin-login">Admin Login</p>

            <input type="text" id="email" name="email" placeholder="  Admin Username" required><br>

            <input type="password" id="password" name="password" placeholder="  Admin Password" required><br>

            <button type="submit" name="login_user" id="login-button">Login</button>

            <p class="admin-login">
                <a class="login-customer" href="#">Login as a CUSTOMER?</a>
            </p>
        </form>
        </div>

    </body>
</html>