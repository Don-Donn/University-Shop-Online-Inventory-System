<?php
session_start();
?>
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
        <?php
        include("../includes/connection.php");
        error_reporting(0);
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }
        if (isset($_SESSION['user_id'])) {

            $userID = $_SESSION['user_id'];

            $userQuery = "SELECT firstname, lastname FROM tbemployee WHERE empid = ?";
            $userStmt = $con->prepare($userQuery);
            $userStmt->bind_param("i", $userID);
            $userStmt->execute();
            $userStmt->bind_result($firstname, $lastname);


            $userStmt->fetch();
            $userStmt->close();

            $employeeName = $firstname . ' ' . $lastname;
        } else {

            $employeeName = "Guest";
        }
        ?>
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
                <input type="text" id="employee" name="employee" value="<?php echo $employeeName; ?>" readonly>
                <br>

                <label for="date">Date:</label><br>
                <input type="date" id="date" name="date" value="<?php echo date('Y-m-d'); ?>" readonly>
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
            
    if (isset($_SESSION['user_id'])) {
        $empid = $_SESSION['user_id'];
    } else {
        header("Location: loginRGOstaff.php");
        exit();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addButton'])) {
        $productId = $_POST['productID'];
        $quantity = $_POST['stocks'];
        $transactionNo = $_POST['transaction'];
        $date = $_POST['date'];

        $checkSql = "SELECT * FROM product WHERE Product_ID = ?";
        $checkStmt = $con->prepare($checkSql);
        $checkStmt->bind_param("i", $productId);
        $checkStmt->execute();
        $result = $checkStmt->get_result();

        if ($result->num_rows > 0) {
            $checkAddStocksSql = "SELECT * FROM add_stocks WHERE Product_ID = ?";
            $checkAddStocksStmt = $con->prepare($checkAddStocksSql);
            $checkAddStocksStmt->bind_param("i", $productId);
            $checkAddStocksStmt->execute();
            $addStocksResult = $checkAddStocksStmt->get_result();

            if ($addStocksResult->num_rows > 0) {
                $updateSql = "UPDATE add_stocks SET Quantity = Quantity + ?, Transaction_No = ?, empid = ?, Date = ? WHERE Product_ID = ?";
                $updateStmt = $con->prepare($updateSql);
                $updateStmt->bind_param("isssi", $quantity, $transactionNo, $empid, $date, $productId);
                $updateStmt->execute();

                if ($updateStmt->affected_rows > 0) {
                    echo "<script>alert('Stocks added and updated successfully!')</script>";
                } else {
                    echo "<script>alert('Error updating data in add_stocks table: " . $updateStmt->error . "')</script>";
                }

                $updateStmt->close();
            } else {
                $insertSql = "INSERT INTO add_stocks (Product_ID, Quantity, Transaction_No, empid, Date) VALUES (?, ?, ?, ?, ?)";
                $insertStmt = $con->prepare($insertSql);
                $insertStmt->bind_param("iisss", $productId, $quantity, $transactionNo, $empid, $date);
                $insertStmt->execute();

                if ($insertStmt->affected_rows > 0) {
                    echo "<script>alert('Stocks added successfully!')</script>";
                } else {
                    echo "<script>alert('Error adding data to add_stocks table: " . $insertStmt->error . "')</script>";
                }

                $insertStmt->close();
            }

            $checkAddStocksStmt->close();
        } else {
            echo "<script>alert('Product ID does not exist')</script>";
        }

        $checkStmt->close();
    } 

    $con->close();
?>
    
    <!--End of transaction.php content -->

<?php
include'../includes/footer.php';
?>