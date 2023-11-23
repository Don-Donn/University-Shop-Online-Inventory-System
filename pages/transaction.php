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
                    <a class="nav-link active" aria-current="true" style="color: white; background-color: maroon; font-weight: bold;" href="transaction.php">ADD PRODUCT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="editProduct.php">EDIT PRODUCT</a>
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
            <form method="POST" enctype="multipart/form-data">
                <label for="productCategory">Product Category:</label><br>
                <select id="productCategory" name="productCategory">
                    <option value="Uniform">Uniform</option>
                    <option value="ID">ID</option>
                    <option value="Textile">Textile</option>
                    <option value="Dept Shirt">Dept Shirt</option>
                    <option value="Merchandise">Merchandise</option>
                    <option value="Hygiene">Hygiene</option>
                    <option value="School Supply">School Supply</option>
                </select>
                <br>
                
                <label for="productName">Product Name:</label><br>
                <input type="text" id="productName" name="productName" required>
                <br>
                
                <label for="description">Description:</label><br>
                <input type="text" id="description" name="description" required>
                <br>
                
                <label for="price">Price:</label><br>
                <input type="number" id="price" name="price" required>
                <br>

                <label for="file">Product Image:</label>
                <input type="file" name="file" id="file" accept=".png, .jpeg, .jpg" required><br>
                
                <button class="addButton" type="submit" name="addproduct" >ADD</button>
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
    $productCategory = $_POST['productCategory'];
    $productName = $_POST['productName'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $filename = $_FILES['file']['name'];
    $fileSize = $_FILES['file']['size'];
    $source_path = $_FILES['file']['tmp_name'];
    $imageExtension = explode('.', $filename);
    $imageExtension = strtolower(end($imageExtension));

    if ($_FILES['file']['error'] == UPLOAD_ERR_OK) {
        $newImage = uniqid() . '.' . $imageExtension;
        $targetPath = __DIR__ . '/../Images/' . $newImage;

        if (move_uploaded_file($source_path, $targetPath)) {
            echo "<script>alert('File uploaded successfully')</script>";

            $sql = "INSERT INTO product (Category_Name, Product_Name, Description, Price, image) VALUES (?, ?, ?, ?, ?)";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("sssis", $productCategory, $productName, $description, $price, $newImage);
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                echo "<script>alert('Product added to product table successfully!')</script>";
            } else {
                echo "<script>alert('Error inserting product into product table: " . $stmt->error . "')</script>";
            }

            $stmt->close();
        } else {
            echo "<script>alert('Error uploading file')</script>";
            echo "<script>console.log('PHP Error:', " . json_encode(error_get_last()) . ")</script>";
        }
    } else {
        echo "<script>alert('File upload error: " . $_FILES['file']['error'] . "')</script>";
    }

    $con->close();
}
?>
<?php
include'../includes/footer.php';
?>
