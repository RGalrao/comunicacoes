<?php

function get_inovacoes_menu(){
  $resultado = select_sql("SELECT * FROM inovacoes");
  return $resultado;
}


function get_inovacao_especifica($id){
  $resultado = select_sql_unico("SELECT * FROM inovacoes WHERE id=?", [$id]);
  return $resultado;
}


// Funçoes BO

function get_lista_inovacoes(){
  $resultado = select_sql("SELECT * FROM inovacoes");
  return $resultado;
}

function criar_nova_inovacao($titulo, $texto){
  idu_sql("INSERT INTO inovacoes (titulo, texto) VALUES (?, ?)", [$titulo, $texto]);
}

function editar_inovacao($titulo, $texto, $id){
  idu_sql("UPDATE inovacoes SET titulo=?, texto=? WHERE id=?", [$titulo, $texto, $id]);
}

function apagar_inovacao($id){
  idu_sql("DELETE FROM inovacoes WHERE id=?", [$id]);
}
  

?>