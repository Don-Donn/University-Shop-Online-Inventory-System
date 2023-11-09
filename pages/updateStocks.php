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
                    <a class="nav-link" href="transaction.php">ADD PRODUCT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="updateStocks.php">UPDATE STOCKS</a>
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
                
                <label for="stocks">Stocks Sold:</label><br>
                <input type="number" id="stocks" name="stocks" required>
                <br>
                
                
                <button class="addButton" type="UPDATE">ADD</button>
            </form>
        </div>

    </div>
    
    <!--End of transaction.php content -->

<?php
include'../includes/footer.php';
?>