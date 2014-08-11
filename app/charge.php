<?php 
$page_title = "Home | Farm Recorder | Making Farm Managment Easy";
include '../core/init.php';
require ('../core/database/connect.php'); // Connecting to the database
$id = $_SESSION['user_id'];
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-plus"></i> Tag Number <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                            <form action="register.php" method="post" role="form">

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
                        <a href="register.php"><i class="fa fa-fw fa-plus"></i> Add An Animal</a>
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
                            Payment
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
<?php
  require_once(dirname(__FILE__) . '/config.php');

  $token  = $_POST['stripeToken'];

  $customer = Stripe_Customer::create(array(
      'email' => 'customer@example.com',
      'card'  => $token
  ));

  $charge = Stripe_Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 2000,
      'currency' => 'eur'
  ));

header("Location: update.php");


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
