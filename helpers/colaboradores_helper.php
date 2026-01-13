<?php

session_start();

function fazer_login_cript($login, $senha){
  $colaborador = select_sql_unico("SELECT * FROM colaboradores WHERE login=?", [$login]);
  if(!empty($colaborador) && password_verify($senha, $colaborador["senha_cript"])){
    $_SESSION["colaborador"] = $colaborador;
    idu_sql("UPDATE colaboradores SET data_ultimo_acesso=NOW() WHERE id=?",  [$colaborador['id']]); 
    header("Location: inicio.php");
  }
}

function verificar_logado(){
  global $colaborador;
  if(!empty($_SESSION["colaborador"])){
    $colaborador = $_SESSION["colaborador"];
  }
  else{
    header("Location: index.php");
  }
}

function logout(){
  session_destroy();
}

?>

