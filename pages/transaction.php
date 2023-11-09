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
        padding:0px;
        padding-top:20px;
        padding-bottom: 45px;
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

        select, input[type="text"], input[type="number"], input[type="file"] {
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
                    <a class="nav-link active" aria-current="true" href="transaction.php">ADD PRODUCT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="updateStocks.php">UPDATE STOCKS</a>
                </li>
            </ul>
        </div>
        <div class="addForm">
            <form method="POST">
                <label for="productCategory">Product Category:</label><br>
                <select id="productCategory" name="productCategory">
                    <option value="Uniform">Uniform</option>
                    <option value="ID">ID</option>
                    <option value="Textile">Textile</option>
                    <option value="Textile">Dept Shirt</option>
                    <option value="Textile">Merchandise</option>
                    <option value="Textile">Hygiene</option>
                    <option value="Textile">School Supply</option>
                </select>
                <br>
                
                <label for="productName">Product Name:</label><br>
                <input type="text" id="productName" name="productName" required>
                <br>
                
                <label for="description">Description:</label><br>
                <input type="text" id="description" name="description" required>
                <br>
                
                <label for="stocks">Stocks:</label><br>
                <input type="number" id="stocks" name="stocks" required>
                <br>
                
                <label for="price">Price:</label><br>
                <input type="number" id="price" name="price" required>
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

                <label for="file">Product Image:</label>
                <input type="file" name="file" id="file" accept=".png, .jpeg, .jpg" required><br>
                
                <button class="addButton" type="submit" name="addproduct" >ADD</button>
            </form>
        </div>

    </div>
    
    <!--End of transaction.php content -->

<?php
include'../includes/footer.php';
?>

<?php
include("../includes/connection.php");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productCategory = $_POST['productCategory'];
    $productName = $_POST['productName'];
    $description = $_POST['description'];
    $stocks = $_POST['stocks'];
    $price = $_POST['price'];
    $transactionNo = $_POST['transaction'];
    $employeeName = $_POST['employee'];
    $date = $_POST['date'];

    $filename = $_FILES['file']['name'];
    $fileSize = $_FILES['file']['size'];
    $source_path=$_FILES['file']['tmp_name'];
    $imageExtension = explode('.',$filename);
    $imageExtension = strtolower(end($imageExtension));

    if($fileSize > 10000000){
        echo "<script> alert('File is too large') </script>";
    }else{
        $newImage = uniqid();
        $newImage .= '.' . $imageExtension;

        move_uploaded_file($source_path,'Icons/'.$newImage);
        $sql = "INSERT INTO add_stocks (Category_Name, Product_Name, Description, Quantity, Price, Transaction_No, Employee_Name, Date, image)
                VALUES ('$productCategory', '$productName', '$description', '$stocks', '$price', '$transactionNo', '$employeeName', '$date', '$newImage')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo "<script>alert('Product has been inserted successfully!')</script>";
        }
    }
}
$conn->close();
?>


