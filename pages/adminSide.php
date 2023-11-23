<!--THIS WILL BE THE MAIN INDEX OF THE SYSTEM FOR ADMIN-->
<?php
session_start();
?>
<style>

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
<?php
include'../includes/connection.php';
include'../includes/sidebar.php';
?>

    <!--Start adminSide.php content --> 


    <!--End of adminSide.php content -->

<?php
include'../includes/footer.php';
?>