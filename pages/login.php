<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<nav class="navbar bg-body-tertiary">
    <div class="container">
        <div class="rgo">
            <h1>RESOURCE GENERATION OFFICE</h1>
        </div>
        <div class="location">
            <h3>Room 202, CECS Bldg., BatStateU Lipa, Marawoy, Lipa City</h3>
        </div>
    </div>
</nav>
<br>
</br>

    <div class="univ">
    <h2>University Shop Login</h2>
    </div>

    <div class="login">
    <form action="login.php" method="post">
        <h2>Please Login</h2>

        <label for="email">EMAIL</label>
        <input type="text" id="email" name="email" placeholder="Email address" required><br>

        <label for="password">PASSWORD</label>
        <input type="password" id="password" name="password" placeholder="Password" required><br>

        <button type="submit" name="login_user">Login</button>

        <p >
            <a href="#">Login as an ADMIN?</a>
        </p>
    </form>
    </div>

</body>
</html>