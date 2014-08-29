<?php
$page_title = "Login | farmrecorder.com | Making Farm Management Easier";
include 'core/init.php';
logged_in_redirect();
?>
<?php
if (empty($_POST) === false){
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($username) === true || empty($password) === true) {
		$errors[] = 'You forgot to enter a username and password';
	}
	else if (user_exists($username) === false) {
		$errors[] = 'This username isn\'t registered in our database. Have you registered?';
	}
	else if (user_active($username) === false) {
		$errors[] = 'You haven\'t activated your account';
	}
	else {
		$login = login($username, $password);
		if ($login === false) {
			$errors[] = 'That username or password is inncorect';
		}
		else { 
			$_SESSION['user_id'] = $login;
			$_SESSION['email'] = $email;
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['free'] = $user_data['free'];
			header('Location: app/index.php');
			exit();
		}
	}
} else {
	$errors[] = 'Not Data';
}


if (empty($errors) === false) {
?>
<?php
include 'includes/widgets/wrong.php';
echo output_errors($errors);
include 'includes/widgets/wrong_second.php';
}

?>