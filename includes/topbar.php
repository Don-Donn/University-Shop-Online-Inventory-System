
   <!-- div for Content Wrapper of top bar-->
        <!-- div for Main Content of topbar -->
    <div id="content-wrapper" class="d-flex flex-column">
        <style>
            .topbar-header{
            margin: 0;
            width: calc(100% - 300px);
            margin-left: 300px;
            display:block;
            background: rgb(235, 235, 235);
            }

            .rgo-txt{

                right: 100%;
                margin: 0;
                padding: 27px;
                text-align: center;
                color: black;
                font-size: 30px;
                font-weight: bold;
                
            }

        </style>

      <!-- Main Content -->
      <div id="content">
            <header class="topbar-header">
                <p class ="rgo-txt">RESOURCE GENERATION OFFICE </p>
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
                        echo "<h1>Welcome Admin $first_name!</h1>";
                    } else {
                        echo "<h2>Welcome, Admin!</h2>";
                    }
                } else {
                    header("Location: loginAdmin.php");
                }
            ?>
            </div>
            </header>
            <!-- End of Topbar -->
    

            <!-- Begin Page Content -->
            <div class="container-fluid">