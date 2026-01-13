<?php

function get_carousel(){
  $resultado = select_sql("SELECT * FROM carousel LIMIT 6");
  return $resultado;
}

function get_carousel_a_mostrar(){
  $resultado = select_sql("SELECT * FROM carousel WHERE mostrar_na_home=1 LIMIT 6");
  return $resultado;
}

function criar_novo_carousel($imagem, $mostrar_na_home){
  idu_sql("INSERT INTO carousel (imagem, mostrar_na_home) VALUES (?, ?)", [$imagem, $mostrar_na_home]);
}

function get_carousel_especifico($id){
  $resultado = select_sql_unico("SELECT * FROM carousel WHERE id=?", [$id]);
  return $resultado;
}

function editar_carousel($imagem, $mostrar_na_home, $id){
  idu_sql("UPDATE carousel SET imagem=?, mostrar_na_home=? WHERE id=?", [$imagem, $mostrar_na_home, $id]);
}

function apagar_carousel($id){
  idu_sql("DELETE FROM carousel WHERE id=?", [$id]);
}
?>