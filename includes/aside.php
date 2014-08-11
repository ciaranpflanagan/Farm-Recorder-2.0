		<center><div id="aside">
		<?php 
if (logged_in() === true) {
	include 'includes/widgets/logged_in.php';
}
else {
		include 'includes/widgets/login.php';
}
		?>
		</div></center>