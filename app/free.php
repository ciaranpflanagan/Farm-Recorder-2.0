<?php 

$q8 = "SELECT CONCAT(free) AS free FROM users WHERE `user_id` = $id;";
$r8 = @mysqli_query($dbc_free, $q8); // Running the query

if ($r8){
    // Fetch and print all records
    while ($row8 = mysqli_fetch_array($r8, MYSQLI_ASSOC)) {
        $free = $row8['free'];
    }
}
?>