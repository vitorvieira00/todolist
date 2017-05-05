<?php
    session_start();
    if(!empty($GET['ATIVIDADE'])){
        $_session['atividades'][] = $_GET['atividade'];
    }
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

    <body>

        <form method="get" action>
        <input type="text" name="atividade" placeholder="Ex: Lavar o Bobby">
        <input type="submit" value="Enviar">
        </form>

    <h2> Lista de Atividades: </h2>

    <ol>
    <?php FOREACH($_SESSION['atividades'] as $ativ):?>

        <li> <?= $ativ ?> </li>

    <?php endforeach;?>
    </ol>
    </body>
</html>