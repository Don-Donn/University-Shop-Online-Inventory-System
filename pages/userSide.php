<!DOCTYPE html>
<html lang="en">

<head>
    <title>UNIVERSITY SHOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/userSide.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<style>
                .timestamp {
            position: absolute;
            top: 90px;
            right: 10px;
            color: white;
        }
</style>
</head>


<body>
    <!--Login Authentication/Welcome User-->
    <nav>
        <div>
            <img id="bsu-logo" src="../icons/bsuLogo.png" alt="Logo" width="100" height="90" >
        </div>

        <div class="user-header">
            <p id = "shop-txt">UNIVERSITY SHOP</p>
            <h4 id = "location">BatStateU Lipa Campus</h4>
        <div>
        <div class="welcome">
        <div class="timestamp" id="timestamp"></div>
            <script>
                function updateTimestamp() {
                    var timestampDiv = document.getElementById('timestamp');
                    var now = new Date();
                    var timestamp = now.toLocaleString();
                    timestampDiv.innerText =  timestamp;
                }
                window.onload = updateTimestamp;
            </script>
        <?php
            session_start();
            include("../includes/connection.php");

            if (isset($_SESSION['user_id'])) {
                $user_id = $_SESSION['user_id'];

                $query = "SELECT firstname FROM tb_studentinfo WHERE studid = $user_id";
                $result = mysqli_query($con, $query);

                if (mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_assoc($result);
                    $first_name = $row['firstname'];
                    echo "<h6 style='position: absolute; top: 43px; left: 85%; color: white;'>$first_name</h6>";
                } else {
                    echo "<h6 style='position: absolute; top: 43px; left: 85%; color: white;'>User</h6>";
                }
            } else {

                header("Location: loginCustomer.php");
            }
        ?>
        </div>
            <a class="logout-btn">
                <img type="button" id="logout-icon" src="../icons/logout2.png" alt="Logout" width="44px" height="42px" ">
            </a>
        </div>
    </nav>

    <br>
    </br>
    <!--index/body/main -->
    <table class="product-table" >
    <thead>
        <tr>
            <th scope="col">Image</th>
            <th scope="col">Product</th>
            <th scope="col">Description</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include("../includes/connection.php");

        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }
        $sql = "SELECT p.image, p.Category_Name, p.Product_Name, p.Description, a.Quantity, p.Price
                FROM product as p
                LEFT JOIN add_stocks as a ON p.Product_ID = a.Product_ID
                ORDER BY p.Product_Name ASC";
        $result = $con->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td><img src='../Images/" .$row["image"] . "' alt='Image not available' width='150' hegiht='100' border='2'></td>";
                    echo "<td>" . $row["Product_Name"] . "</td>";
                    echo "<td>" . $row["Description"] . "</td>";
                    echo "<td>" . $row["Quantity"] . "</td>";
                    echo "<td>" . $row["Price"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'></td></tr>";
            }
            $con->close();
        ?>
    </table>

    <!--announcement pop up -->
    <?php
    include("../includes/connection.php");

    $sql = "SELECT announcement FROM announcement";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo '<script>
                console.log("Announcement:", "' . $row["announcement"] . '");
                Swal.fire({
                    title: "Announcement",
                    text: "' . $row["announcement"] . '",
                    icon: "info",
                    confirmButtonText: "Okay",
                });
            </script>';
    }
    $con->close();
?>
</body>
</html>
<?php include_once 'logoutUser.php'; ?>
