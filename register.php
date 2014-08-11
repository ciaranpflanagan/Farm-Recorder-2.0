<?php 	include 'core/init.php';
logged_in_redirect();

 		if (empty($_POST) === false) {
 			$required_fields = array('username', 'first_name', 'email', 'password', 'password_again');
 			foreach ($_POST as $key=>$value) {
 				 if (empty($value) && in_array($key, $required_fields) === true) {
 				 	$errors[] = 'Starred fields are required';
 				 	break 1;
 				 }
 			}

 			if (empty($errors) === true) {
 				if (user_exists($_POST['username']) === true) {
 					$errors[] = 'Sorry, that username \'<b>' . htmlentities($_POST['username']) . '</b>\' is already registered';
 				}
 				if (preg_match("/\\s/", $_POST['username']) === true) {
 					$errors[] = 'Your username can\'t contain any spaces';
 				}
 				if (strlen($_POST['password']) <= 6) {
 					$errors[] = 'Your password must be at least 6 characters long';
 				}
 				if ($_POST['password'] !== $_POST['password_again']) {
 					$errors[] = 'Your passwords do not match';
 				}
 				if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
 					$errors[] = 'A valid email address is needed to register';
 				}
 				if (email_exists($_POST['email']) === true) {
 					$errors[] = 'Sorry, that email \'<b>' . htmlentities($_POST['email']) . '</b>\' is already registered';
 				}
 			}
 		}
 		?>
<?php
if (isset($_GET['success']) && empty($_GET['success'])) {
	echo 'You\'ve been registered successfully! Please wait while we redirect you.<br/><br/>If you haven\'t been redirected after about 10 seconds please <a href="index.php">click here</a>.';
}
else {
if (empty($_POST) === false && empty($errors) === true) {
	$register_data = array('username' => $_POST['username'], 'password' => $_POST['password'], 'first_name' => $_POST['first_name'], 'last_name' => $_POST['last_name'], 'email' => $_POST['email']);
	register_user($register_data);

	header('Location: register.php?success');
  sleep(10);
  header('Location: index.php');
	exit();
}
else if (empty($errors) === false) {
	echo output_errors($errors); 
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Log In</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<section class="container">
    <div class="login">
      <h1>Login to Web App</h1>
      <form action="" method="post">
        <p><input type="text" name="username" value="" placeholder="Username"></p>
        <p><input type="text" name="first_name" value="" placeholder="First Name"></p>
        <p><input type="text" name="last_name" value="" placeholder="Last Name"></p>
        <p><input type="text" name="email" value="" placeholder="Email"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p><input type="password" name="password_again" value="" placeholder="Password"></p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>

    <div class="login-help">
      <p>Have an account? <a href="index.php">Click here to sign in</a>.</p>
      <p>Forgot your password? <a href="change_password.php">Click here to reset it</a>.</p>
    </div>
  </section>

  <section class="about">
    <p class="about-links">
      <a href="http://www.cssflow.com/snippets/login-form" target="_parent">View Article</a>
      <a href="http://www.cssflow.com/snippets/login-form.zip" target="_parent">Download</a>
    </p>
    <p class="about-author">
      &copy; 2012&ndash;2013 <a href="http://thibaut.me" target="_blank">Thibaut Courouble</a> -
      <a href="http://www.cssflow.com/mit-license" target="_blank">MIT License</a><br>
      Original PSD by <a href="http://www.premiumpixels.com/freebies/clean-simple-login-form-psd/" target="_blank">Orman Clark</a>
  </section>
<?php } ?>