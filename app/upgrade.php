<?php 
error_reporting(0);
$page_title = "Home | Farm Recorder | Making Farm Managment Easy";
include '../core/init.php';
$id = $_SESSION['user_id'];
require '../core/database/connect.php';
require '../core/database/connect_free.php';
require '../core/database/animal_connect.php';
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
<center><i><h4>Add A Note About An Animal</h4></i></center>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-tags"></i> Flock <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                            <form action="flock_number.php" method="post" role="form">
<center><i><h4>Add An Animal To A Flock</h4></i></center>
                            <div class="form-group">
                                <label>Animal's Number</label>
                                <input type="number" class="form-control" name="tag_number" maxlength="10">
                            </div>
                            <div class="form-group">
                                <label>Flock Number</label>
                                <input type="number" class="form-control" name="flock_number" maxlength="10">
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
                            <a href="index.phps"><i class="fa fa-fw fa-credit-card"></i> Paid Member: 
<?php
include 'free.php';
if (intval($free) === 1) {
    echo 'Yes';
}
else {
    echo 'No';
}
?>
                             </a>
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
                        <a href="flocks.php"><i class="fa fa-fw fa-group"></i> Flocks</a>
                    </li>
                    <li>
                        <a href="contact.php"><i class="fa fa-fw fa-phone"></i> Bug Reporter</a>
                    </li>
                    <li>
                        <a href="logs.php"><i class="fa fa-fw fa-question-circle"></i> Bug Fix Listings</a>
                    </li>
                    <li>
                        <a href="upgrade.php"><i class="fa fa-fw fa fa-arrow-up"></i> Upgrade</a>
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
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-sm-4">
                        <div class="list-group" style="text-align: center;">
                            <a href="#" class="list-group-item">
                                <h4 class="list-group-item-heading">Premium Plan</h4>
                                <p class="list-group-item-text">With our Premium Plan you get access to more features and extra space to store your tag numbers. You'll also get better support and all future updates. </p>
                            </a>
                            <a href="#" class="list-group-item">
                                <br/>
                                <br/>
                            </a>
                            <a href="#" class="list-group-item">
                                <h4 class="list-group-item-heading">Extra Features</h4>
                                <p class="list-group-item-text">When you upgrade to premium you get access to extra features such as a Pedigree Feature (Coming Soon) and a Medical Records Feature (Coming Even Sooner).</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <h4 class="list-group-item-heading">Full Support</h4>
                                <p class="list-group-item-text">When you purchase a premium account you'll be able to avail of our full support with proiority and quick turn around times.</p>
                            </a>
                            <a href="#" class="list-group-item">
                                <h4 class="list-group-item-heading">Future Updates</h4>
                                <p class="list-group-item-text">All future updates will be pushed to your account first when you purchase a premium account. This will allow you to shape the way Farm Recorder develops.</p>
                            </a>
                        </div>
                    </div>
                    <!-- /.col-sm-4 -->
                    <br/>
                <div class="col-sm-4">
                <div class="list-group" style="text-align: center;">
                <br/><br/><br/><br/><br/><br/><br/>
                <h4>Upgrade Now For Only €20 <?php $email = $_SESSION['email']; echo $email; ?></h4>
                <br/>
                    <form action="charge.php" method="post">
                        <script
                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="pk_test_NetB6GOCLUPGuQ2Q2lNpKbve"
                            data-name="Premium Account"
                            data-email=""
                            data-description="All Features | €20"
                            data-amount="2000"
                            data-currency="eur">
                        </script>
                    </form>
                </div>
                </div>
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
