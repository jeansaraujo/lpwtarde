<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admistração - Acesso Restrito</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="styleadm.css">

</head>
<style>
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
            <span class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>LOVE</span>
        </session>
        <session id="conteudo">
                <p>
                    Informações
                </p>
                <p>
                    
                </p>
        </session>
    </main>
     <footer class="page-footer text-darken-2">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
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