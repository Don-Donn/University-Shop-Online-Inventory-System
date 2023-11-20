<!-- include session/ confirm login? -->


<!DOCTYPE html>
<html>

    <title>University Shop</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom styles-->
    <link rel="stylesheet" href="../css/sidebar.css">
 
 
    </head>

    <body>
            
        <div id = wrapper> <!-- Page Wrapper/Add Div wrapper -->
            <nav  id="sidebar">
                <div class="brand-container">
                    <img id="spartanLlogo" src="../icons/redSpartan.png" alt="Logo" width="95" height="102" >
                    <p class="univ-txt">University <br>Shop</p>
                </div>
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
                            echo "<h6 style='position: absolute; top: 43px; right: 133px; color: white;'>$first_name</h6>";
                        } else {
                            echo "<h6 style='position: absolute; top: 43px; right: 133px; color: white;'>User</h6>";
                        }
                    } else {

                        header("Location: loginRGOstaff.php");
                    }
                ?>
                <ul>

                    <!-- Divider -->
                    <hr class="sidebar-divider" id="header-hr">

                    <!-- Nav Items -->

                    <li class="nav-item">
                        <a class="nav-link" id="navLink1" href="productInventory.php" onclick="toggleColor(this)">
                            <i class="fa-solid fa-warehouse"></i>
                            <span>Product Inventory</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="navLink2" href="transaction.php">
                            <i class="fa-solid fa-clipboard-list fa-lg"></i>
                            <span>Transaction</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="navLink3" href="announcement.php">
                            <i class="fa-solid fa-bullhorn"></i>
                            <span>Announcement</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <p class="nav-link">
                            <i class="fa-solid fa-user"></i>
                            <span>Accounts</span>
                        </p>
                    </li>
                </ul>


                    <!-- Divider -->
                    <br><br><br><br><br><br><br><br>
                    <hr class="sidebar-divider" id="logout-hr">

                    <!-- Sidebar Toggler (Logout) -->
                    
                    <button id="btn" name="btn" class="logout-btn">Logout</button>

                    </div>

            </nav>

            <script src="../css/sidebar.js"></script>
            <!-- End of Sidebar -->

<!-- end div wrapper to footer-->

<!-- include_once topbar/header -->
<?php include_once 'topbar.php'; ?>
<?php include_once '../pages/logoutRGO.php'; ?>
<!-- move end html tag to footer-->





        
