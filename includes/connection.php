<?php

$con = mysqli_connect('localhost','root', '', 'inventory_system','3306');

if(!$con){
    die(mysqli_error($con));
}
?>