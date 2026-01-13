<?php

function get_home(){
  $resultado = select_sql_unico("SELECT * FROM home");
  return $resultado;
}

function editar_home($titulo, $subtitulo, $texto){
  idu_sql("UPDATE home SET titulo=?, subtitulo=?, texto=?", [$titulo, $subtitulo, $texto]);
}
?>