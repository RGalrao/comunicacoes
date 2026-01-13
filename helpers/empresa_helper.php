<?php

function get_empresa_menu(){
  $resultado = select_sql("SELECT * FROM empresa");
  return $resultado;
}

function get_empresa_especifica($id){
  $resultado = select_sql_unico("SELECT * FROM empresa WHERE id=?", [$id]);
  return $resultado;
}



// Funçoes BO

function get_lista_empresa(){
  $resultado = select_sql("SELECT * FROM empresa");
  return $resultado;
}

function criar_novo_empresa($titulo, $texto){
  idu_sql("INSERT INTO empresa (titulo, texto) VALUES (?, ?)", [$titulo, $texto]);
}

function editar_empresa($titulo, $texto, $id){
  idu_sql("UPDATE empresa SET titulo=?, texto=? WHERE id=?", [$titulo, $texto, $id]);
}

function apagar_empresa($id){
  idu_sql("DELETE FROM empresa WHERE id=?", [$id]);
}
  
?>