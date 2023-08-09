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
    #btn_sair{
        border: 2px black solid;
        padding: 5px;
        border-radius: 10px;
        float: right;
        margin-right: 30px;
    }
    #btn_sair:hover{
        border: 2px black double;
        background-color: darkgray;
        color:white;
        border-radius: 10px;
        transition: 5s;
    }
    #menu {
    width: 10%;
    height: 60vh;
    border-right: gray solid 5px;
    display: flex;
    flex-direction: column;
    justify-content: space-between; 
    }

    #menu a {
    border: 2px darkgray dotted;
    padding: 5px;
    color: red !important;
    margin-right: 10px;
    text-align: center;
    }

</style>
<?php
    session_start();
?>

<body>
    <?php
        if(isset($_SESSION["email"])){
    ?>
    <header>
        <h1>
            Área Administrativa
        </h1>
        <p>
            <a id="btn_sair" href="?acao=logout">LOGOUT</a>
        </p>
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
                    
                </p>
        </session>
    </main>
    <footer>
        <p>
            Desenvolvimendo pela turma mais love dos IFs
        </p>
    </footer>
    <?php
        }
        else{
            print   " <script>
                        alert('Usuário não logado');
                      </script>
                    ";
                    //header("Location:http://localhost/ifpe2023lpwtarde/PHP/projetin/index.php");            
        }
    ?>
  
 </body>
</html>


<?php
    if(isset($_GET["acao"])=="logout"){
        unset($_SESSION["email"]);
        session_destroy();
        header("Location:http://localhost/ifpe2023lpwtarde/PHP/projetin/index.php");            
    }
?>