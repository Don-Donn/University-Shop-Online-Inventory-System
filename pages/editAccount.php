<?php
include'../includes/connection.php';
include'../includes/sidebar.php';
?>
    <!--Style transaction.php content -->
    <style>
        .cardProduct{

        width: calc(100% - 320px);
        margin-top: 6px;
        margin-left: 310px;
        display:inline-block;
        background: rgb(245, 245, 245);
        }



        .addForm{
        padding:15px;
        padding-top:40px;
        padding-bottom: 65px;
        overflow: hidden;
        text-align: center;

        }
        form {
        display: inline-block;
        width: 500px;
        border: 1px solid #000;
        padding: 10px;
        text-align: center;
        border-radius: 10px;
        }
        label{
        font-weight: bold;
        font-size:medium;
        }
        input{
        font-size: medium;
        }

        label, select, input {
        display: inline-block;
        margin-bottom: 10px;
        }

        select, input[type="text"], input[type="number"] {
        text-align: center;
        width: 43%;
        padding: 5px;
        font-size: 12px;
        line-height: 1.5;
        }

        .addButton {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        }
        .timestamp {
            position: absolute;
            top: 70px;
            right: 10px;
        }

    </style>
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
    <!--Start transaction.php content -->
    <div class="cardProduct">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" style="color: white; background-color: maroon; font-weight: bold;">EDIT ACCOUNT</a>
                </li>             
            </ul>
        </div>
        <div class="addForm">
            <form method="POST">
                <?php
                $empid = isset($_GET['empid']) ? $_GET['empid'] : '';
                ?>
                
                <label for="ID">ID:</label><br>
                <input type="text" id="ID" name="ID" value="<?php echo $empid; ?>" readonly>
                <br>

                <label for="newPassword">New Password:</label><br>
                <input type="text" id="newPassword" name="newPassword" required>
                <br>     
                
                <button class="addButton" type="submit" name="addButton">UPDATE</button>
            </form>
        </div>

    </div>
    
    <!--End of transaction.php content -->
    <?php
    include("../includes/connection.php");

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $empid = $_POST['ID'];
        $newpassword = $_POST['newPassword'];

            $sql = "UPDATE emp_data SET User_Password = ? WHERE empid = ?";
            $stmt = $con->prepare($sql);

            $stmt->bind_param("si", $newpassword, $empid);

            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                echo "<script>alert('Password updated successfully!')</script>";
            } else {
                echo "<script>alert('Error updating password')</script>";
            }

            $stmt->close();
        }

        $con->close();
?>
<?php
include'../includes/footer.php';
?>