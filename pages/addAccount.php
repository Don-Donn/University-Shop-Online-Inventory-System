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


    </style>

    <!--Start transaction.php content -->
    <div class="cardProduct">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" style="color: white; background-color: maroon; font-weight: bold;" href="outStocks.php">ADD ACCOUNT</a>
                </li>             
            </ul>
        </div>
        <div class="addAccount">
            <form method="POST">
                <label for="ID">ID:</label><br>
                <input type="text" id="ID" name="ID" value="<?php echo $empid; ?>">
                <br>

                <label for="firstName">First Name:</label><br>
                <input type="text" id="firstName" name="firstName" value="<?php echo $empid; ?>">
                <br>

                <label for="lastName">Last Name:</label><br>
                <input type="text" id="lastName" name="lastName" value="<?php echo $empid; ?>">
                <br>

                <label for="emailAd">Email:</label><br>
                <input type="text" id="emailAd" name="emailAd" value="<?php echo $empid; ?>">
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
include'../includes/footer.php';
?>