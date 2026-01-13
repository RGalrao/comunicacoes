<?php 

function abreviar($texto, $caracteres){
  $resultado = substr(strip_tags($texto), 0, $caracteres);
  return $resultado . "...";
}

?>