<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
    <link rel="stylesheet" href="../aula2608/style.css">
</head>
<body>
    <header>
        <h1>Seja muito bem-vindo</h1>
    </header>

    <main>
    <?php
        $nome = $_GET["nome"];
        $snome  =   $_GET["sobrenome"];
        echo "Bem-vindo $nome $snome este é o meu site";
    ?>
    <p><a href="javascript:history.go(-1)">Retornar a página anterior</a></p>
</main>


    
</body>
</html>