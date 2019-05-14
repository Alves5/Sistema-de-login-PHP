<?php
echo "<link rel='stylesheet' href='css/meuCss.css'>";
session_start();
if(!isset($_SESSION['usuario']) && !isset($_SESSION['senha'])){
  if(!isset($_COOKIE['usuario']) && !isset($_COOKIE['senha'])){
    echo "<h1 id='na'>Acesso não autorizado!</h1><BR>";
    echo "<center><h2>Por gentileza, faça o seu login <a href='form.php'>Clicando aqui</a></h2></center>.<BR>";
    echo "<img id='forbidden' src='imagens/erro403.jpeg'>'";
    //header("Location: form.php");
}else{
  echo "<link rel='stylesheet' href='materialize/css/materialize.css'>";
  echo "<script src='materialize/js/materialize.min.js'></script>";
  echo " <nav>
          <div class='nav-wrapper'>
            <a href='#' class='brand-logo'>Bem vindo {$_SESSION['usuario']}</a>
            <ul id='nav-mobile' class='right hide-on-med-and-down'>
              <li><a href='#'>Sass</a></li>
              <li><a href='#'>Components</a></li>
              <li><a href='destruirCookies.php'>Log Out</a></li>
            </ul>
          </div>
        </nav>";
      }
}else{
  echo "<link rel='stylesheet' href='materialize/css/materialize.css'>";
echo "<script src='materialize/js/materialize.min.js'></script>";
  echo " <nav>
  <div class='nav-wrapper'>
    <a href='#' class='brand-logo'>Bem vindo {$_SESSION['usuario']}</a>
    <ul id='nav-mobile' class='right hide-on-med-and-down'>
      <li><a href='#'>Sass</a></li>
      <li><a href='#'>Components</a></li>
      <li><a href='destruirCookies.php'>Log Out</a></li>
    </ul>
  </div>
</nav>";
}
?>