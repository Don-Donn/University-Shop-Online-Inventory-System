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



        .addAccount{
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
        margin: 0;
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
                    <a class="nav-link active" aria-current="true" style="color: white; background-color: maroon; font-weight: bold;">ADD ACCOUNT</a>
                </li>             
            </ul>
        </div>
        <div class="addAccount">
            <form method="POST">

                <label for="EC">EMPLOYEE CODE</label><br>
                <input type="text" id="EC" name="EC" required>
                <br>

                <label for="firstName">First Name:</label><br>
                <input type="text" id="firstName" name="firstName" required>
                <br>

                <label for="lastName">Last Name:</label><br>
                <input type="text" id="lastName" name="lastName" required>
                <br>

                <label for="usertype">User Type:</label><br>
                <input type="text" id="usertype" name="usertype" required>
                <br>

                <label for="department">Department:</label><br>
                <input type="text" id="department" name="department" value="RGO" readonly>
                <br>

                <label for="emailAd">Email:</label><br>
                <input type="text" id="emailAd" name="emailAd" required>
                <br>

                <label for="passWord">Password:</label><br>
                <input type="text" id="passWord" name="passWord" required>
                <br>

                <label for="retypePass">Confirm Password:</label><br>
                <input type="text" id="retypePass" name="retypePass" required>
                <br>               
                
                <button class="addButton" type="submit" name="addButton">ADD</button>
            </form>
        </div>

    </div>
    <?php
    include("../includes/connection.php");
    error_reporting(E_ALL);

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addButton'])) {
        // Retrieve form data
        $empid = mysqli_real_escape_string($con, $_POST['EC']);
        $firstName = mysqli_real_escape_string($con, $_POST['firstName']);
        $lastName = mysqli_real_escape_string($con, $_POST['lastName']);
        $usertype = mysqli_real_escape_string($con, $_POST['usertype']);
        $dept = mysqli_real_escape_string($con, $_POST['department']);
        $email = mysqli_real_escape_string($con, $_POST['emailAd']);
        $password = mysqli_real_escape_string($con, $_POST['passWord']);
        $confirmPassword = mysqli_real_escape_string($con, $_POST['retypePass']);

        if ($password != $confirmPassword) {
            echo "Password and Confirm Password do not match.";
        } else {

            $insertEmployeeQuery = "INSERT INTO tbemployee (firstname, lastname, department) VALUES ('$firstName', '$lastName', '$dept')";
            $resultEmployee = mysqli_query($con, $insertEmployeeQuery);


            $insertEmpDataQuery = "INSERT INTO emp_data (empCode, User_Type, User_Email, User_Password) VALUES ('$empid', '$usertype', '$email', '$password')";
            $resultEmpData = mysqli_query($con, $insertEmpDataQuery);

            if ($resultEmployee && $resultEmpData) {
                echo "<script>alert('Account added successfully!')</script>";
            } else {
                echo "Error: " . mysqli_error($con);
            }
        }
    }
?>
    
<?php
include'../includes/footer.php';
?>