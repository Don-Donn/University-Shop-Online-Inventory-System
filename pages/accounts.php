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

    #ad-head{
    display: inline-block;
    }

    .m-2{
    color: maroon;
    display; inline;
    }

    #add-user{
    display: inline-block;
    position: absolute;
    left: 225px;
    top: 25px;
    margin: 5px;
    padding: 5px;
    }
    .timestamp {
            position: absolute;
            top: 70px;
            right: 10px;
        }

    </style>
            <div class="timestamp" id="timestamp"></div>
            <script>
                function updateTimestamp() {
                    var timestampDiv = document.getElementById('timestamp');
                    var now = new Date();
                    var timestamp = now.toLocaleString();
                    timestampDiv.innerText =  timestamp;
                }
                window.onload = updateTimestamp;
            </script>

    <div class="cardProduct">
        <!-- ADMIN TABLE -->
        <div class="card shadow mb-4">
            <div class="card-header py-3" id="ad-head">
                <h4 class="m-2 font-weight-bold">Admin Account(s)</h4>
                <a class="add-btn"  href="addAccount.php">
                    <i class="fa-solid fa-user-plus fa-2xl" id="add-user" style="color: #ffd700;"></i>
                </a>
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
                            echo "<td><button style='padding: 1px 15px; display: flex; justify-content: center; text-align: center; border-radius: 5px; background-color: maroon; color: white;' onclick='editAccount(" . $row["empid"] . ")'>EDIT</button></td>";
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
