<?php
    session_start();
    
    // ASSIM 
    // $titulo =  str_replace('#', '-', $_POST['titulo-chamado']);
    // $categoria =  str_replace('#', '-', $_POST['categoria-chamado']);
    // $descricao =  str_replace('#', '-', $_POST['descricao-chamado']);

    // $texto = $titulo .'#'. $categoria .'#'. $descricao;

    // OU ASSIM
    $_POST['titulo-chamado'] =  str_replace('#', '-', $_POST['titulo-chamado']);
    $_POST['categoria-chamado'] =  str_replace('#', '-', $_POST['categoria-chamado']);
    $_POST['descricao-chamado'] =  str_replace('#', '-', $_POST['descricao-chamado']);

    $texto = $_SESSION['id'] . '#' . implode('#', $_POST) . PHP_EOL;

    echo $texto;

    // chmod 777 arquivo.txt
    // sudo nano apache2.conf 
    $arquivo = fopen("../../PHP8-app-help-desk/arquivo.txt", "a");
    
    fwrite($arquivo, $texto);

    if($arquivo!=''){
        fclose($arquivo);
    }
    
    header('Location: abrir_chamado.php');
?>