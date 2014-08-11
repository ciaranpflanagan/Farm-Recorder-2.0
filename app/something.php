<?php
require ('../core/database/animal_connect.php'); // Connecting to the database
$id = $_SESSION['user_id'];

// Making the query
$q = "SELECT CONCAT(tag_number) AS tn, CONCAT(mother_tag_number) AS mtn, CONCAT(ram_number) AS rn FROM test_1234 WHERE `user_id` = $id ORDER BY tag_number ASC";
$r = @mysqli_query($dbc, $q); // Running the query

//
$num = mysqli_num_rows($r);

// If it ran OK, display records
if ($num > 0) {
    
    // Displaying the number of registered users
    echo "<p>There are currently <strong>$num</strong> animals registered!!!</p>";
    
    // Table header
    echo '<table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Tag Number</th>
                                        <th>Mother\'s Tag Number</th>
                                        <th>Ram\'s Tag Number</th>
                                    </tr>
                                </thead>';
    
    // Fetch and print all records
    while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
        echo '<tr><td>' . $row['tn'] . '</td><td>' . $row['mtn'] . '</td><td>' . $row['rn'] . '</td></tr>';
    }
    
    echo '</tbody></table>'; // Closing the table

// Will add this later
//include ('tag_color_display.php');
    
    mysqli_free_result ($r); // Freeing up resources
}
// If it didn't run OK
else
{
    // Public message
    echo '<p>We can\'t display your animals because you haven\'t registered any. You can register an animal <a href="register_new_animal.php">here</a>.</p>';
    
    // Debugging message
    // echo '<p>' . mysqli_error($dbc) . '<br/><br/>Query: ' . $q . '</p>';
} // End of ($r) if statement

mysqli_close($dbc); // Closing the database connection

?>