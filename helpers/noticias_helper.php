<?php 

function get_noticias_home(){
  $resultado = select_sql("SELECT * FROM noticias WHERE mostrar_na_home=1 LIMIT 6");
  return $resultado;
}

function get_total_noticias(){
  $total = select_sql_unico("SELECT Count(*) as total FROM noticias")["total"];
  return $total;
}

function get_noticias_total_paginas(){
  $total = get_total_noticias();
  $resultado = ceil($total / 6);
  return $resultado;
}

function get_noticias_pagina($pagina){
  $elementos_por_pagina = 6;
  $offset = ($pagina - 1) * $elementos_por_pagina;
  $resultado = select_sql("SELECT * FROM noticias LIMIT ? OFFSET ?", [$elementos_por_pagina, $offset]);
  return $resultado;
}

function get_noticia_especifica($id){
  $resultado = select_sql_unico("SELECT * FROM noticias WHERE id=?", [$id]);
  return $resultado;
}



// Funçoes BO

function get_lista_noticias(){
  $resultado = select_sql("SELECT * FROM noticias");
  return $resultado;
}

function criar_nova_noticia($mostrar_na_home, $imagem, $titulo, $data, $texto){
  idu_sql("INSERT INTO noticias (mostrar_na_home, imagem, titulo, data, texto) VALUES (?, ?, ?, ?, ?)", [$mostrar_na_home, $imagem, $titulo, $data, $texto]);
}

function editar_noticia($mostrar_na_home, $imagem, $titulo, $data, $texto, $id){
  idu_sql("UPDATE noticias SET mostrar_na_home=?, imagem=?, titulo=?, data=?, texto=? WHERE id=?", [$mostrar_na_home, $imagem, $titulo, $data, $texto, $id]);
}

function apagar_noticia($id){
  idu_sql("DELETE FROM noticias WHERE id=?", [$id]);
}

?>