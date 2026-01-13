function mudar_icone(elemento){
  if(elemento.src.includes("public/imgs/icones/menu-sanduiche.svg")){
    elemento.src = "public/imgs/icones/fechar-menu.svg"
  }
  else{elemento.src = "public/imgs/icones/menu-sanduiche.svg"}
}


function abrir_menu(elemento){
  setTimeout(() => {elemento.click()}, 750);
}