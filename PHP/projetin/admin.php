<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admistração - Acesso Restrito</title>
    <link rel="stylesheet" href="styleadm.css">
</head>
<style>
    footer{
        background-color: darkgray;
        color:white
        display:black;
    }
</style>
<body>
    <header>
        <h1>
            Área Administrativa
        </h1>
    </header>
    <main>
        <session id="menu">
            <a href="">menu 1</a><a href="">menu 2</a><a href="">menu 3</a><a href="">menu 4</a>
        </session>
        <session id="conteudo">
                <p>
                    Informações
                </p>
                <p>
                    <?php
                        print session_status();
                        print $_SESSION["usuario"];
                    ?>
                </p>
        </session>
    </main>
    <footer>
        <p>
            Desenvolvimendo pela turma mais love dos IFs
        </p>
    </footer>
</body>
</html>