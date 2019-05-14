<?php
$user = $_POST['usuario'];
$pwd = $_POST['pwd'];
$pwd2 = $_POST['pwd2'];
$email = $_POST['email'];
$file = $_FILES['perfil']['tmp_name'];
	//Criação de cookies
	setcookie("usuario", $user, time()+360);
	setcookie("senha", $pwd, time()+360);
	//Criação de sessão
	session_start();
	$_SESSION["usuario"] = $user;
	$_SESSION["senha"] = $pwd;
	$_SESSION["autenticado"] = true;

if (file_exists("usuario.class.php")) {
	require_once("usuario.class.php");
	$log = new Usuario($user, $pwd, $pwd2, $email, $file);
	if($log->Verificar($pwd,$pwd2)){
		header("Location: index.php");
	}else{
		echo "Usuário ou senha não compatíveis!";
	}
}else{
	echo "Arquivo não encontrado";
}
?>