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


    </style>

    <!--Start transaction.php content -->
    <div class="cardProduct">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" style="color: white; background-color: maroon; font-weight: bold;" href="outStocks.php">EDIT ACCOUNT</a>
                </li>             
            </ul>
        </div>
        <div class="addForm">
            <form method="POST">
                
                <label for="accountEmail">Email:</label><br>
                <input type="text" id="accountEmail" name="accountEmail" required>
                <br>
                
                <label for="accountName">Name:</label><br>
                <input type="text" id="accountName" name="accountName" required>
                <br>
                
                <label for="accPassword">Current Password:</label><br>
                <input type="number" id="accPassword" name="accPassword" required>
                <br>

                <label for="newPassword">New Password:</label><br>
                <input type="number" id="newPassword" name="newPassword" required>
                <br>

                <label for="retypePass">Confirm New Password:</label><br>
                <input type="number" id="retypePass" name="retypePass" required>
                <br>               
                
                <button class="addButton" type="submit" name="addButton">UPDATE</button>
            </form>
        </div>

    </div>
    
    <!--End of transaction.php content -->

<?php
include'../includes/footer.php';
?>