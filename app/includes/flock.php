                <div class="row">
                <div class="navbar navbar-default">
                    <div class="container">
                            <ul class="nav navbar-nav">
                                <li><a href="flocks.php"><?php 
while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
    echo $row['fn'];
};?></a>
                                </li>
                                <li><a href="flock.php?number=2"><?php 
while ($row2 = mysqli_fetch_array($r2, MYSQLI_ASSOC)) {
    echo $row2['fn'];
};?></a>
                                </li>
                                <li><a href="flock.php?number=3"><?php 
while ($row3 = mysqli_fetch_array($r3, MYSQLI_ASSOC)) {
    echo $row3['fn'];
};?></a>
                                </li>
                                <li><a href="flock.php?number=4"><?php 
while ($row4 = mysqli_fetch_array($r4, MYSQLI_ASSOC)) {
    echo $row4['fn'];
};?></a>
                                </li>
                                <li><a href="flock.php?number=5"><?php 
while ($row5 = mysqli_fetch_array($r5, MYSQLI_ASSOC)) {
    echo $row5['fn'];
};?></a>
                                </li>
                                <li>
                                </li>
                                <li>
                                </li>
                                <li  class="active"><a href="flock.php?rename=1">Rename Flocks</a>
                                </li>                            
                            </ul>
                        <!--/.nav-collapse -->
                    </div>
                </div>
                </div>
                </div>
                    <div class="col-lg-12">
                        <div class="table-responsive">
<?php
require ('../core/database/animal_connect.php'); // Connecting to the database
$id = $_SESSION['user_id'];
$flock_number = $_GET['number'];

// Making the query
$q = "SELECT CONCAT(tag_number) AS tn, CONCAT(mother_tag_number) AS mtn, CONCAT(ram_number) AS rn, CONCAT(note) AS n FROM test_1234 WHERE `user_id` = $id AND `flock_number` = '$flock_number' AND `dead` = '0' ORDER BY tag_number ASC";
$r = @mysqli_query($dbc, $q); // Running the query

//
$num = mysqli_num_rows($r);

// If it ran OK, display records
if ($num > 0) {
    
    // Displaying the number of registered users
    echo "<p>You have <strong>$num</strong> animal in this flock.</p>";
    
    // Table header
    echo '<table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Tag Number</th>
                                        <th>Dam\'s Tag Number</th>
                                        <th>Sire\'s Tag Number</th>
                                        <th>Animal\'s Note</th>
                                    </tr>
                                </thead>';
    
    // Fetch and print all records
    while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
        echo '<tr><td><a href="profile.php?tag_number=' . $row['tn'] . '">' . $row['tn'] . '</td><td><a href="profile.php?tag_number=' . $row['mtn'] . '">' . $row['mtn'] . '</td><td><a href="profile.php?tag_number=' . $row['rn'] . '">' . $row['rn'] . '</td><td>' . $row['n'] . '</td></tr>';
    }
    
    echo '</tbody></table>'; // Closing the table

    
    mysqli_free_result ($r); // Freeing up resources
}
// If it didn't run OK
else
{
    // Public message
    echo '<p>We can\'t display your animals because you haven\'t put any in this flock.</p>';
    
    // Debugging message
    // echo '<p>' . mysqli_error($dbc) . '<br/><br/>Query: ' . $q . '</p>';
} // End of ($r) if statement

mysqli_close($dbc); // Closing the database connection

?>
                        </div>
                    </div>