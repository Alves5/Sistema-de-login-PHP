<?php
if($_COOKIE["usuario"] == "" && $_SESSION["autenticado"] == ""){
	require_once("form.php");
}else{
	require_once("home.php");
}
?>