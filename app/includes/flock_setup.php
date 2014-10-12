<?php
include '../../core/init.php';
$id = $_SESSION['user_id'];
require '../../core/database/connect_free.php';
require '../../core/database/animal_connect.php';
    
    $q_delete = "DELETE FROM `flock` WHERE `user_id` = $id;";
    $r_delete = @mysqli_query ($dbc, $q_delete); // Run the query

    // Registering user into database    
    // Making the query
    $q = "INSERT INTO `flock` SET `user_id` = $id, `flock_number` = '1', `flock_name` = 'Flock 1';";
    $r = @mysqli_query ($dbc, $q); // Run the query

    $q2 = "INSERT INTO `flock` SET `user_id` = $id, `flock_number` = '2', `flock_name` = 'Flock 2';";
    $r2 = @mysqli_query ($dbc, $q2); // Run the query

    $q3 = "INSERT INTO `flock` SET `user_id` = $id, `flock_number` = '3', `flock_name` = 'Flock 3';";
    $r3 = @mysqli_query ($dbc, $q3); // Run the query

    $q4 = "INSERT INTO `flock` SET `user_id` = $id, `flock_number` = '4', `flock_name` = 'Flock 4';";
    $r4 = @mysqli_query ($dbc, $q4); // Run the query

    $q5 = "INSERT INTO `flock` SET `user_id` = $id, `flock_number` = '5', `flock_name` = 'Flock 5';";
    $r5 = @mysqli_query ($dbc, $q5); // Run the query

header("Location: ../flocks.php");
?>