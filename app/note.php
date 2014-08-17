<?php 
$page_title = "Home | Farm Recorder | Making Farm Managment Easy";
include '../core/init.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $page_title;?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Farm Recorder</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-plus"></i> Note <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                            <form action="note.php" method="post" role="form">

                            <div class="form-group">
                                <label>Animal's Number</label>
                                <input type="number" class="form-control" name="tag_number" maxlength="10">
                            </div>
                            <div class="form-group">
                                <label>Note</label>
                                <textarea class="form-control" name="note" maxlength="100"></textarea>
                            </div>
                                <br/>
                            <button type="submit" class="btn btn-primary">Submit Button</button><br/><br/>
                            <button type="reset" class="btn btn-primary">Reset Button</button>

                        </form>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-tags"></i> Tag Number <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                            <form action="register.php" method="post" role="form" style="float: left;">
<i><h4>Add A New Tag</h4></i>
                            <div class="form-group">
                                <label>Animal's Number</label>
                                <input type="number" class="form-control" name="tag_number" maxlength="10">
                            </div>
                            <div class="form-group">
                                <label>Dam's Number</label>
                                <input type="number" class="form-control" name="mother_tag_number" maxlength="10">
                            </div>
                            <div class="form-group">
                                <label>Sire's Number</label>
                                <input type="number" class="form-control" name="ram_number" maxlength="10">
                            </div>
                                <br/>
                            <button type="submit" class="btn btn-primary">Submit Button</button><br/><br/>
                            <button type="reset" class="btn btn-primary">Reset Button</button>

                        </form>
                        <form action="remove.php" method="post" role="form" style="float: right;">
<i><h4>Mark As Deceased</h4></i>
                            <div class="form-group">
                                <label>Animal's Number</label>
                                <input type="number" class="form-control" name="tag_number" maxlength="10">
                            </div>
                                <br/>
                            <button type="submit" class="btn btn-primary">Submit Button</button><br/><br/>

                        </form>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo ucfirst($_SESSION['username']);?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="index.phps"><i class="fa fa-fw fa-gear"></i> Dashboard</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../log_out.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Your Tag Numbers</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->


              <div class="row">
                    <div class="col-lg-6">
<?php

// Checking for form submissions
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    require ('../core/database/animal_connect.php'); // Connecting to the database
    
    $errors = array(); // Initializing an error array

    // Checking for tag number
    if (empty($_POST['tag_number'])) {
        $errors[] = 'You forgot to enter your a tag number!';
    }
    else
    {
        $tn = mysqli_real_escape_string($dbc, trim($_POST['tag_number']));
    }

    // Checking for mother's tag number
    if (empty($_POST['note'])) {
        $errors[] = 'You forgot to enter a note!';
    }
    else
    {
        $n = mysqli_real_escape_string($dbc, trim($_POST['note']));
    }

    $id = $_SESSION['user_id'];
    
// If everything is OK
if (empty($errors)) {
    // Registering user into database    
    // Making the query
    $q = "UPDATE `test_1234` SET `note` = '$n' WHERE `user_id` = '$id' AND `tag_number` = '$tn';";
    $r = @mysqli_query ($dbc, $q); // Run the query
    // If it ran OK
    if ($r) {
    header("Location: index.php");        
}
    // If it didn't run OK
    else
    {
        // Printing a message
        echo '<h1>System Error</h1>
        <p>You could not be registered in our database due to a system error. We\'ll look into it. Sorry for any inconvenience.</p>';
        
        // Debugging message
        echo '<p>' . mysqli_error($dbc) . '<br/><br/>Query: ' . $q . '</p>';
    } // End of ($r) if statement
    mysqli_close($dbc); // Closing the database connection
    
    exit();
}
// Reporting the Errors
else
{
    echo '<h1>Error!!!</h1>
    <p>The following error(s) have occurred:<br/>';
    foreach ($errors as $msg) {
        echo " - $msg<br/>\n";
    }
    echo '</p><p>Please try again. Thank You.</p><p><br/></p>';
} // End of (empty($errors)) if statement
    mysqli_close($dbc); // Closing the database connection
}
?>
                </div>
                <!-- /.row -->


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
