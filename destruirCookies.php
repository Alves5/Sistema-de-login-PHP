<?php
	 setcookie("usuario");
	 setcookie("senha");
	 session_destroy();
	 //setcookie("PHPSESSID");
	 header("Location: index.php");
?>