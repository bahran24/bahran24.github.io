<?php
	session_start();
	$username=$_POST['uname'];
	$password=$_POST['psw'];
	$tipe=$_POST['peran'];

if ($tipe=="admin" && $username == "maistro" && $password == "5513"){
	$_SESSION['uname']=$username;
	echo "harap tunggu...";
	echo "<script>window.location.replace('main.php');</script>";}

else if ($tipe=="user" && $username == "fauzi" && $password == "bahran"){
	$_SESSION['uname']=$username;
	
	echo "<script>window.location.replace('top.php');</script>";}

else {echo "
	<script>
	alert('periksa kembali username dan password anda!');
	window.location.replace('login.html');
	</script>";}
?>