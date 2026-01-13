<?php

function get_destaques_home(){
  $resultado = select_sql("SELECT * FROM destaques WHERE mostrar_na_home=1 LIMIT 6");
  return $resultado;
}

function get_total_destaques(){
  $total = select_sql_unico("SELECT Count(*) as total FROM destaques")["total"];
  return $total;
}

function get_destaques_total_paginas(){
  $total = get_total_destaques();
  $resultado = ceil($total / 6);
  return $resultado;
}

function get_destaques_pagina($pagina){
  $elementos_por_pagina = 6;
  $offset = ($pagina - 1) * $elementos_por_pagina;
  $resultado = select_sql("SELECT * FROM destaques LIMIT ? OFFSET ?", [$elementos_por_pagina, $offset]);
  return $resultado;
}

function get_destaque_especifico($id){
  $resultado = select_sql_unico("SELECT * FROM destaques WHERE id=?", [$id]);
  return $resultado;
}



// Funçoes BO

function get_lista_destaques(){
  $resultado = select_sql("SELECT * FROM destaques");
  return $resultado;
}

function criar_novo_destaque($mostrar_na_home, $imagem, $titulo, $data, $texto){
  idu_sql("INSERT INTO destaques (mostrar_na_home, imagem, titulo, data, texto) VALUES (?, ?, ?, ?, ?)", [$mostrar_na_home, $imagem, $titulo, $data, $texto]);
}

function editar_destaque($mostrar_na_home, $imagem, $titulo, $data, $texto, $id){
  idu_sql("UPDATE destaques SET mostrar_na_home=?, imagem=?, titulo=?, data=?, texto=? WHERE id=?", [$mostrar_na_home, $imagem, $titulo, $data, $texto, $id]);
}

function apagar_destaque($id){
  idu_sql("DELETE FROM destaques WHERE id=?", [$id]);
}
  
?>