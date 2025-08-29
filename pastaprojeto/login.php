<!--Em, essa página vai ser para ser do login, a outra é apenas do cadastro -->

<?php
$login = $_GET["login"];
$entrar = $_GET["entrar"];
$senha = md5($_POST["senha"]);
$connect = mysql_connect("nome_servidor","nome_usuario","senha");
$db = mysql_select_db("projetoagua");
  if (isset($entrar)) {

    $verifica = mysql_query("SELECT * FROM usuarios WHERE login =
    "$login" AND senha = "$senha"") or die("erro ao selecionar");
      if (mysql_num_rows($verifica)<=0){
        echo"<script language="javascript" type="text/javascript">
        alert("Login e/ou senha incorretos");window.location
        .href="login.html";</script>";
        die();
      }else{
        setcookie("login",$login);
        header("Location:index.php");
      }
  }
?>