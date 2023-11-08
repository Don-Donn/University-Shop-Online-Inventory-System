<?php
include'../includes/connection.php';
include'../includes/sidebar.php';
?>

    <style>
    .prodTable{
    width: calc(100% - 320px);
    margin-top: 40px;
    margin-left: 310px;
    display:inline-block;
    background: rgb(245, 245, 245);
    }

    .m-2{
    color: maroon;
    }
    </style>

    <!--Start productInventory.php content -->
    <div class="prodTable">
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold ">Products</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
               <thead>
                   <tr>
                     <th>CATEGORY</th>
                     <th>PRODUCT NAME</th>
                     <th>DESCRIPTION</th>
                     <th>STOCKS</th>
                     <th>PRICE</th>
                   </tr>
               </thead>
                <tbody>
                    <!-- Content for tbody or td -->
                </tbody>
                            
                </table>
                        
               </div>
                   
            </div>
                  
    </div>
    </div>
    
    <!--End of productInventory.php content -->

<?php
include'../includes/footer.php';
?>