<?php

function get_parceiros(){
  $resultado = select_sql("SELECT * FROM parceiros");
  return $resultado;
}



// Funçoes BO

function get_lista_parceiros(){
  $resultado = select_sql("SELECT * FROM parceiros");
  return $resultado;
}

function get_parceiro_especifico($id){
  $resultado = select_sql_unico("SELECT * FROM parceiros WHERE id=?", [$id]);
  return $resultado;
}

function criar_novo_parceiro($nome, $logo, $tamanho){
  idu_sql("INSERT INTO parceiros (nome, logo, tamanho) VALUES (?, ?, ?)", [$nome, $logo, $tamanho]);
}

function editar_parceiro($nome, $logo, $tamanho, $id){
  idu_sql("UPDATE parceiros SET nome=?, logo=?, tamanho=? WHERE id=?", [$nome, $logo, $tamanho, $id]);
}


function apagar_parceiro($id){
  idu_sql("DELETE FROM parceiros WHERE id=?", [$id]);
}

?>