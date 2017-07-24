<?php

$pagina = filter_input(INPUT_GET, "pagina", FILTER_SANITIZE_STRING);

$arrayPaginas = array(
    "home" => "View/home.php", //Página 
    "contato" => "View/ContatoView/ContatoView.php", //Página 
    "usuario" => "View/UsuarioView/UsuarioView.php", //Página 
    "classificado" => "View/ClassificadoView/ClassificadoView.php", //Página 
    "categoria" => "View/CategoriaView/CategoriaView.php", //Página 
);

if ($pagina) {
    $encontrou = false;

    foreach ($arrayPaginas as $page => $key) {
        if ($pagina == $page) {
            $encontrou = true;
            require_once($key);
        }
    }

    if (!$encontrou) {
        require_once("View/home.php");
    }
} else {
    require_once("View/home.php");
}
?>