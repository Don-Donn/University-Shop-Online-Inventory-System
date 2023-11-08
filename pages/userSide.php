<!DOCTYPE html>
<html lang="en">
<head>
    <title>UNIVERSITY SHOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/userSide.css">

</head>


<body>
    <nav>
        <div>
            <img id="bsu-logo" src="../icons/bsuLogo.png" alt="Logo" width="100" height="90" >
        </div>

        <div class="user-header">
            <p id = "shop-txt">UNIVERSITY SHOP</p>
            <h4 id = "location">BatStateU Lipa Campus</h4>
        <div>
        <div class="welcome">
        <?php
            session_start();
            include("../includes/connection.php");

            if (isset($_SESSION['user_id'])) {
                $user_id = $_SESSION['user_id'];

                $query = "SELECT First_Name FROM user_data WHERE User_ID = $user_id";
                $result = mysqli_query($con, $query);

                if (mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_assoc($result);
                    $first_name = $row['First_Name'];
                    echo "<h2>Welcome, $first_name!</h2>";
                } else {
                    echo "<h2>Welcome, User!</h2>";
                }
            } else {

                header("Location: loginCustomer.php");
            }
        ?>
        </div>
            <a class="logout-btn">
                <img type="button" id="logout-icon" src="../icons/logout2.png" alt="Logout" width="42px" height="42px" ">
             </a>
        </div>
    </nav>

    <br>
    </br>

    <table class="product-table" >
    <thead>
        <tr>
            <th scope="col">Product</th>
            <th scope="col">Size</th>
            <th scope="col">Stock(s)</th>
            <th scope="col">Price</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include("../includes/connection.php");

        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }
        $sql = "SELECT Product_Name, Product_Description, Product_Quantity, Product_Price FROM product";
        $result = $con->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["Product_Name"] . "</td>";
                    echo "<td>" . $row["Product_Description"] . "</td>";
                    echo "<td>" . $row["Product_Quantity"] . "</td>";
                    echo "<td>" . $row["Product_Price"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>N/A</td></tr>";
            }
            $con->close();


        ?>
    </table>
    
</body>
</html>
<?php include_once 'logoutUser.php'; ?>