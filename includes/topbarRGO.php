
   <!-- div for Content Wrapper of top bar-->
        <!-- div for Main Content of topbar -->
        <div id="content-wrapper">
        <style>
            .topbar-header{
            margin: 0;
            width: calc(100% - 305px);
            margin-left: 305px;
            display:block;
            background: white;
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1);
            }

            .rgo-txt{

                right: 100%;
                margin: 0;
                padding: 27px;
                text-align: center;
                color: maroon;
                font-size: 30px;
                font-weight: bold;
                
            }
            .container-fluid{
                padding:0;
                padding-top:5px;
            }
            .timestamp {
            position: absolute;
            top: 70px;
            right: 10px;
        }


        </style>

      <!-- Main Content -->
      <div id="content">
            <header class="topbar-header">
                <p class ="rgo-txt">RESOURCE GENERATION OFFICE </p>
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
                error_reporting(0);
                include("../includes/connection.php");
                if (isset($_SESSION['user_id'])) {
                    $user_id = $_SESSION['user_id'];

                    $query = "SELECT firstname FROM tbemployee WHERE empid = $user_id";
                    $result = mysqli_query($con, $query);

                    if (mysqli_num_rows($result) == 1) {
                        $row = mysqli_fetch_assoc($result);
                        $first_name = $row['firstname'];
                        echo "<h6 style='position: absolute; top: 40px; right: 15px; color: black;'>Staff $first_name</h6>";
                    } else {
                        echo "<h6 style='position: absolute; top: 40px; right: 15px; color: black;'>RGO Staff</h6>";
                    }
                } else {
                    header("Location: loginRGOstaff.php");
                }
            ?>
            </div>
            </header>
            <!-- End of Topbar -->
    

            <!-- Begin Page Content -->
            <div class="container-fluid">