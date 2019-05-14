<?php
class Usuario{
	private $usuario;
	private $password;
	private $password2;
	private $email;
	private $file;

	//Construtor
	public function __construct($usuario, $password, $password2, $email, $file){
		$this->usuario = $usuario;
		$this->password = $password;
		$this->password2 = $password2;
		$this->email = $email;
		$this->file = $file;
	}
	//Método verificar senhas
	public function Verificar($p, $p2){
        if ($p == $p2) {
			return true;
		}else{
			return false;
		}
	}
	//Verificação da pasta $usuario
	public function VerificarPasta($usuario, $pwd){
		if(!file_exists("$usuario")){
			mkdir("$usuario", 0777, true);
			$arquivo = fopen("$usuario/infor.txt", "a");
			fwrite($arquivo,"Usuário: $usuario\n");
			fwrite($arquivo,"Senha: $pwd");
			fclose($arquivo);
		}else{
			$arquivo = fopen("$usuario/infor.txt", "a");
			fwrite($arquivo,"Usuário: $usuario\n");
			fwrite($arquivo,"Senha: $pwd");
			fclose($arquivo);
		}
	}
	//Encapsulamento
	public function getUsuario(){
		return $this->usuario;
	}
	public function setUsuario($user){
		$tamanho_nome = strlen($user);
			if($tamanho_nome < 5 || $tamanho_nome > 45 ){
				echo "Preencha o campo nome corretamente!";
				return false;
			}
			$this->usuario = $user;
	}
	public function getPassword(){
		return $this->password;
	}
	public function setPassword($pass){
		$tamanho_pwd = strlen($pass);
			if($tamanho_pwd < 5 || $tamanho_pwd > 45){
				echo "Preencha o \"campo senha\" corretamente!";
				return false;
			}
			$this->password = $pass;
	}
	public function getPassword2(){
		return $this->password2;
	}
	public function setPassword2($pass2){
		$tamanho_pwd2 = strlen($pass2);
			if($tamanho_pwd2 < 5 || $tamanho_pwd2 > 45){
				echo "Preencha o campo senha novamente corretamente!";
				return false;
			}
			$this->password2 = $pass2;
	}
	public function getEmail(){
		return $this->email;
	}
	public function setEmail($email){
		$tamanho_email = strlen($email);
		if($tamanho_email < 5 || $tamanho_email > 45){
			echo "Preencha o campo email!";
			return false;
		}
		strtolower($email);
			$this->email = $email;
	}
	public function getFile(){
		return $this->file;
	}
	public function setFile($file){
		//Verificação da imagem, e move-lá pra dentro da pasta $user
		if(isset($file)){
			move_uploaded_file($file, "$usuario/perfil.jpg");
		}else{
			echo "Campo imagem não preenchido";
			return false;
		}
		$this->file = $file;	
	}
}



?>