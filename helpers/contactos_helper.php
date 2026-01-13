<?php 

function get_contactos(){
  $resultado = select_sql_unico("SELECT * FROM contactos");
  return $resultado;
}


// Funçoes BO

function editar_contactos($morada, $telefone, $fax, $email, $nif, $coordenadas, $linkedin, $instagram, $facebook){
  idu_sql("UPDATE contactos SET morada=?, telefone=?, fax=?, email=?, nif=?, coordenadas=?, linkedin=?, instagram=?, facebook=?", [$morada, $telefone, $fax, $email, $nif, $coordenadas, $linkedin, $instagram, $facebook]);
}

function get_lista_contactos(){
  $resultado = select_sql("SELECT * FROM contactos");
  return $resultado;
}

  

?>