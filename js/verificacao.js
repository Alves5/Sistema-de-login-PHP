function validar(){
	var nome_user = document.getElementById("name").value;
	if(nome_user.length < 5 || nome_user.length > 64){
		swal({
			title: 'Erro nome',
			text: 'O campo nome deve ter entre 5 e 45 caracteres!',
			type: 'error',
			confirmButtonText: 'Ok'
		})
	}
	var nome_pwd = document.getElementById("pwd").value;
	if(nome_pwd.length < 5 || nome_pwd.length > 45){
		swal({
			title: 'Erro senha!',
			text: 'A senha deve ter entre 5 e 45 caracteres!',
			type: 'error',
			confirmButtonText: 'Ok'
		})
		return false;
	}
	var nome_pwd2 = document.getElementById("pwd2").value;
	if(nome_pwd2.length < 5 || nome_pwd2.length > 45){
		swal({
			title: 'Campo incorreto',
			text: 'Preencha corretamente o campo confirme sua senha!',
			type: 'error',
			confirmButtonText: 'Ok'
		})
		return false;
	}
	if(nome_pwd != nome_pwd2){
		swal({
			title: 'Senhas!',
			text: 'As senhas não estão compatíveis!',
			type: 'error',
			confirmButtonText: 'Ok'
		})
		return false;
	}
	if(document.meuForm.perfil.value== ""){
		swal({
			title: 'Error!',
			text: 'Preencha o campo imagem!',
			type: 'error',
			confirmButtonText: 'Ok'
		})
		return false;
	}
	document.forms["meuForm"].submit();
}