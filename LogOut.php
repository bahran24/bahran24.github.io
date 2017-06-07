<?php
	session_start();
	unset($_SESSION['uname']);
	session_destroy();

	echo "<script>
	alert('Anda telah logout!');
	window.location.replace('login.html');
	</script>";
?>