<?php
    session_start();

    // echo '<pre>';
    // print_r($_SESSION);
    // echo '</pre>';

    // remover indices especificos
    // unset()
    // unset($_SESSION['x']);//remove apenas se o indice existir

    // destruir a varia de sessão
    session_destroy(); // será destruida mas so deixara de existir na proxima requisição
    // redirecionamento
    header('Location: index.php');
    // echo '<pre>';
    // print_r($_SESSION);
    // echo '</pre>';

?>