<!-- include session/ confirm login? -->


<!DOCTYPE html>
<html>

    <title>University Shop</title>

    <!-- Custom fonts for this template-->

    <!-- Custom styles-->
    <link rel="stylesheet" href="../css/sidebar.css">
 
 
    </head>

    <body>
            
        <div id = wrapper> <!-- Page Wrapper/Add Div wrapper -->
            <nav  id="sidebar">
                <div class="brand-container">
                    <img id="spartanLlogo" src="../icons/redSpartan.png" alt="Logo" width="95" height="102" >
                    <p class="univ-txt">University <br> Shop</p>
                </div>
                <ul>

                    <!-- Divider -->
                    <hr class="sidebar-divider" id="header-hr">

                    <!-- Nav Items -->

                    <li class="nav-item">
                        <a class="nav-link" href="productInventory.php">
                            <!-- i or icon link tag -->
                            <span>Product Inventory</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="transaction.php">
                            <!-- i or icon link tag -->
                            <span>Inventory History</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="announcement.php">
                            <!-- i or icon link tag -->
                            <span>Announcement</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="accounts.php">
                            <!-- i or icon link tag -->
                            <span>Accounts</span>
                        </a>
                    </li>
                </ul>


                    <!-- Divider -->
                    <br><br><br><br><br><br><br><br><br><br>
                    <hr class="sidebar-divider" id="logout-hr">

                    <!-- Sidebar Toggler (Logout) -->
                    
                    <button class="logout-btn">Logout</button>

                    </div>

            </nav>
            <script src="../css/sidebar.js"></script>

            <!-- End of Sidebar -->

<!-- end div wrapper to footer-->

<!-- include_once topbar/header -->
<?php include_once 'topbar.php'; ?>

<!-- move end html tag to footer-->





        
