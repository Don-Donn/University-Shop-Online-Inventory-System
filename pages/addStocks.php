<?php
include'../includes/connection.php';
include'../includes/sidebarRGO.php';
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
                    <a class="nav-link" href="transaction.php">ADD PRODUCT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="editProduct.php">EDIT PRODUCT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" style="color: white; background-color: maroon; font-weight: bold;" href="addStocks.php">ADD STOCKS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="outStocks.php">OUT STOCKS</a>
                </li>             
            </ul>
        </div>
        <div class="addForm">
            <form method="POST">
                <label for="productID">Product ID:</label><br>
                <input type="number" id="productID" name="productID" required>
                <br>
                
                <label for="stocks">Quantity:</label><br>
                <input type="number" id="stocks" name="stocks" required>
                <br>

                <label for="transaction">Transaction NO:</label><br>
                <input type="number" id="transaction" name="transaction" required>
                <br>

                <label for="employee">Employee Name:</label><br>
                <input type="text" id="employee" name="employee" required>
                <br>

                <label for="date">Date:</label><br>
                <input type="date" id="date" name="date" required>
                <br>
    
                
                <button class="addButton" type="submit" name="addButton">ADD</button>
            </form>
        </div>

    </div>

    <?php
    include("../includes/connection.php");

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addButton'])) {
        $productId = $_POST['productID'];
        $quantity = $_POST['stocks'];
        $transactionNo = $_POST['transaction'];
        $employeeName = $_POST['employee'];
        $date = $_POST['date'];



        $sql = "INSERT INTO add_stocks (Product_ID, Quantity, Transaction_No, Employee_Name, Date)
        VALUES (?, ?, ?, ?, ?)";
    
        $stmt = $con->prepare($sql);
        $stmt->bind_param("iisss", $productId, $quantity, $transactionNo, $employeeName, $date);
        $stmt->execute();
    
        if ($stmt->affected_rows > 0) {
            echo "<script>alert('Stocks added to add_stocks table successfully!')</script>";
        } else {
            echo "<script>alert('Error inserting stocks into add_stocks table: " . $stmt->error . "')</script>";
        }
    
        $stmt->close();
    }
    $con->close();
?>
    
    <!--End of transaction.php content -->

<?php
include'../includes/footer.php';
?>