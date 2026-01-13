<?php

function get_banner($menu){
  $resultado = select_sql_unico("SELECT * FROM banners WHERE menu=?",[$menu]);
  return $resultado["imagem"];
}


function editar_banner($imagem, $menu){
  idu_sql("UPDATE banners SET  imagem=? WHERE menu=?", [ $imagem,$menu]);
}

?>