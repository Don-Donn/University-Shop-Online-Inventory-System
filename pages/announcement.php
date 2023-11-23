<?php
session_start();
?>
<?php
include'../includes/connection.php';
include'../includes/sidebarRGO.php';
?>

    <style>
        .formA{

        width: 430px;
        height: 450px;
        margin-top: 15px;
        margin-left: 450px;
        display:inline-block;
        background: rgb(245, 245, 245);
        }

        .formB{
        width: 430px;
        height: 450px;
        margin-top: 15px;
        margin-left:15px;
        background: rgb(245, 245, 245);
        }

        .m-2{
        color: maroon;
        }

        .formA, .formB {
        display: inline-block;
        padding: 15px;
        }

        form, .output-form {
        display: inline-block;
        margin: 20px;

        }

        .card-header{
        font-size: 20px;
        }

        .annButton {
        margin: 10px;
        font-size: 18px;
        }

        textarea {
        text-align: center;
        font-size: 18px;
        line-height: 1.5;
        }
    </style>

    <!--Start announcement.php content -->
    <div class="announcement">
                <!-- ADMIN TABLE -->


                    <?php
                    // Check connection
                    if ($con->connect_error) {
                        die("Connection failed: " . $con->connect_error);
                    }
                    $announcement = "";
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        if (isset($_POST['postButton'])) {
                            $announcement = $_POST['inputText'];

                            $sql = "INSERT INTO announcement (announcement) VALUES ('$announcement')";
                            $result = $con->query($sql);

                            if ($result) {
                                echo "<script>alert('Announcement Posted!')</script>";
                            }
                        } else if (isset($_POST['saveButton'])) {
                            $announcement = $_POST['outputTextarea'];

                            $sql = "UPDATE announcement SET announcement = '$announcement'";
                            $result = $con->query($sql);

                            if ($result) {
                                echo "<script>alert('Announcement Updated!')</script>";
                            }
                        } else if (isset($_POST['clearButton'])) {
                            $announcement = "";

                            $sql = "DELETE FROM announcement";
                            $result = $con->query($sql);

                            if ($result) {
                                echo "<script>alert('Announcement Cleared!')</script>";
                            }
                        }
                    }
                    
                    // Select the announcement from the database
                    $sql = "SELECT * FROM announcement";
                    $result = $con->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $announcement = $row['announcement'];
                        }
                    } else {
                        $announcement = "";
                    }

                    $con->close();
                    ?>

                <div class="formA">
                    <div class="card-header">
                      ANNOUNCEMENT
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <textarea name="inputText" rows="10" cols="37"></textarea><br>
                            <button class="annButton" type="submit" name="postButton">POST</button>
                        </form>
                    </div>
            </div>


                <div class="formB">
                    <div class="card-header">
                      POSTED ANNOUNCEMENT
                    </div>
                    <div class="output-form">
                        <form method="post">
                            <textarea name="outputTextarea" id="outputTextarea" rows="10" cols="37" readonly><?php echo $announcement; ?></textarea><br>
                            <button class="annButton" type="button" name="editButton" id="editButton">Edit</button>
                            <button class="annButton" type="submit" name="saveButton">Save</button>
                            <button class="annButton" type="submit" name="clearButton">Clear</button>
                            <input type="submit" name="submit" value="Update" style="display: none;">
                        </form>
                    </div>
                </div>
                <script>
                    document.getElementById('editButton').addEventListener('click', function() {
                        var outputTextarea = document.getElementById('outputTextarea');
                        outputTextarea.removeAttribute('readonly');
                        outputTextarea.focus();
                    });
                </script> 
            </div>
    
    <!--End of announcement.php content -->

<?php
include'../includes/footer.php';
?>