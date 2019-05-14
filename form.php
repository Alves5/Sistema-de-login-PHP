<?php
echo "<link rel='stylesheet' href='materialize/css/materialize.css'>";
echo "<link rel='stylesheet' href='css/meuCss.css'>";
echo "<link rel='stylesheet' href='sweetAlert/sweetalert2.min.css'>";
echo "<script src='materialize/js/materialize.min.js'></script>";
echo "<script src='sweetAlert/sweetalert2.min.js'></script>";
echo "<script src='js/verificaco.js'></script>";
echo "
  <h1 id='fo'>Cadastre suas informações</h1>
    <form action='Cadastro.php' method='POST' name='meuForm' enctype='multipart/form-data'>
        <div class='input-field'>
          <input id='name' type='text' name='usuario' class='validate' required>
          <label for='name'>Nome de usuário</label>
        </div>
        <div class='input-field'>
          <input id='pwd' type='password' name='pwd' class='validate' required>
          <label for='pwd'>Senha</label>
          <span id='senha'></span>
        </div>
        <div class='input-field'>
          <input id='pwd2' type='password' name='pwd2' class='validate' required>
          <label for='pwd2'>Comfirme sua senha</label>
          <span id='confirm'></span>
        </div>
        <div class='input-field'>
          <input id='email' type='email' class='validate'>
          <label for='email'>Email</label>
          <span class='helper-text' data-error='incorreto' data-success='correto'></span>
        </div>
        <div class='file-field input-field'>
          <div class='btn btn-file'>
            <span>File</span>
            <input id='perfil' type='file' name='perfil' value=''>
          </div>
          <div class=file-path-wrapper'>
            <input class='file-path validate' type='text' required>
          </div>
        </div>
        <div id='enviar'>
          <input class='btn waves-effect waves-light' type='submit' onclick='validar();' value='Enviar'/>
        </div>
    </form>";
?>