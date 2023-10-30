<?php
include'../includes/connection.php';
include'../includes/sidebar.php';
?>

    <!--Start overview.php content -->
    <div class = overviewTable>
        <style>
        .product-table {
            margin: 0 auto;
            margin-top: 30px;
            margin-left: 410px;
            width: 70%;
            border-collapse: collapse;
        }
        
        .product-table th, .product-table td {
            padding: 10px;
            text-align: left;

        }
        
        .product-table thead th {
            background-color: maroon;
            color: white;
            border: 1px solid maroon;
            font-size: 23px;
        }
        
        .product-table tbody td {
            font-size: 20px;
            background-color: white;
            color: black;
            border: none;
        }
  
        </style>
        <table class="product-table" >
        <thead>
            <tr>
                <th scope="col">Product</th>
                <th scope="col">Size</th>
                <th scope="col">Stock(s)</th>
                <th scope="col">Price</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </thead>
        </table>

    </div>

    
    <!--End of overview.php content -->

<?php
include'../includes/footer.php';
?>