<?php
include'../includes/connection.php';
include'../includes/sidebar.php';
?>

    <style>
    .cardProduct{

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

    <div class="cardProduct">
        <!-- ADMIN TABLE -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-2 font-weight-bold">Admin Account(s)</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>Name</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    <tbody>
                    <?php
                    $sql = "SELECT e.empid, e.User_Email, t.firstname, t.lastname, e.User_Password
                            FROM emp_data as e
                            Left Join tbemployee as t on e.empid = t.empid";
                    $result = $con->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["User_Email"] . "</td>";
                            echo "<td>" . $row["firstname"] . " " . $row["lastname"] . "</td>";
                            echo "<td>" . $row["User_Password"] . "</td>";
                            echo "<td><button onclick='editAccount(" . $row["empid"] . ")'>Edit</button></td>";
                            echo "</tr>";
                        }
                    }   
                    ?>
                    <script>
                        function editAccount(empid) {
                            window.location.href = 'editAccount.php?empid=' + empid ;
                        }
                    </script>

                    </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

<?php
include'../includes/footer.php';
?>
