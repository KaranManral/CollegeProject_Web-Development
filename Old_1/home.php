<?php
	session_start();
	if(!isset($_SESSION['User_Logged_In']))
		echo "<script>parent.location.href='index.php';</script>";
	else
		echo "<script>location.href='https://professor91.github.io/SyllabusWeb_NewDesign_Preview/stages/ug.html';</script>";
?>