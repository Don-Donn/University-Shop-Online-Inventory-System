<?php
include'../includes/connection.php';
include'../includes/sidebar.php';
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
                            <textarea name="outputText" rows="10" cols="37" id="outputTextarea" readonly></textarea><br>
                            <button class="annButton" type="button" name="editButton" id="editButton">Edit</button>
                            <button class="annButton" type="submit" name="saveButton">Save</button>
                            <button class="annButton" type="submit" name="clearButton">Clear</button>
                    </div>
                </div>

            </div>
    
    <!--End of announcement.php content -->

<?php
include'../includes/footer.php';
?>