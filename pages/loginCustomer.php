<!--require session-->
    <?php
    session_start();
    

    include("../includes/connection.php");
    if (isset($_POST['login_user'])){
        $useremail = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM stud_data WHERE User_Email = '$useremail' AND User_Password = '$password'";
        $result = mysqli_query($con, $query);
        
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['User_Type'] == "User") {
                
                $_SESSION['user_id'] = $row['studid'];
                header("Location: userSide.php");
            }
         else {
        
            echo "<script>alert('Invalid, This is not User Account. Please Try Again'); window.location='loginCustomer.php'</script>";
        }
    }else{
        echo "<script>alert('Invalid Email or Password. Please Try Again!'); window.location='loginCustomer.php'</script>";
    }
}
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
        <form action=" " method="POST">
            <p class="please-login">Customer Login</p>

            <input type="email" id="email" name="email" placeholder="Email address" required><br>

            <input type="password" id="password" name="password" placeholder="Password" required><br>

            <button type="submit" name="login_user" id="login-button" >Login</button>

        </form>
        </div>

    </body>
</html>