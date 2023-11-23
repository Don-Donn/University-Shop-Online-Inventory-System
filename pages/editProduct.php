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
                <!--add prod, add stocks, out stocks ,edit-->
                <li class="nav-item">
                    <a class="nav-link"  href="transaction.php">ADD PRODUCT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" style="color: white; background-color: maroon; font-weight: bold;" href="editProduct.php">EDIT PRODUCT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="addStocks.php">ADD STOCKS</a>
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
                
                <label for="description">Description:</label><br>
                <input type="text" id="description" name="description" required>
                <br>
                
                <label for="price">Price:</label><br>
                <input type="number" id="price" name="price" required>
                <br>
                
                <button class="addButton" type="submit" name="editproduct" >SAVE</button>
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
    $productId = $_POST['productID'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    // Add other fields as needed

    // Update the product details in the database
    $sql = "UPDATE product SET Description = ?, Price = ? WHERE Product_ID = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ssi", $description, $price, $productId);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "<script>alert('Product updated successfully!')</script>";
    } else {
        echo "<script>alert('Error updating product')</script>";
    }

    $stmt->close();
}

$con->close();
?>


<?php
include'../includes/footer.php';
?>
