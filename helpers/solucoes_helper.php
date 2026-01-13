<?php

function get_solucoes_menu(){
  $resultado = select_sql("SELECT * FROM solucoes");
  return $resultado;
}


function get_solucao_especifica($id){
  $resultado = select_sql_unico("SELECT * FROM solucoes WHERE id=?", [$id]);
  return $resultado;
}



// Funçoes BO

function get_lista_solucoes(){
  $resultado = select_sql("SELECT * FROM solucoes");
  return $resultado;
}

function criar_nova_solucao($titulo, $texto){
  idu_sql("INSERT INTO solucoes (titulo, texto) VALUES (?, ?)", [$titulo, $texto]);
}

function editar_solucao($titulo, $texto, $id){
  idu_sql("UPDATE solucoes SET titulo=?, texto=? WHERE id=?", [$titulo, $texto, $id]);
}

function apagar_solucao($id){
  idu_sql("DELETE FROM solucoes WHERE id=?", [$id]);
}
  

?>