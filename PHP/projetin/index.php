<link rel="stylesheet" href="style.css">
<body>
    <?php
        if(isset($_SESSION["usuario"])){
            print "usuario Logado";
            print $_SESSION["usuario"];     
        }
        if(isset($_GET['pagina'])){
            $pagina = $_GET['pagina'];
            switch($pagina){
                case "home":
                    include("pages/home.php");
                    break;
                case "cadastro":
                    include("pages/cadastro.php");
                    break;
                case "lista":
                    include("pages/lista.php");
                    break;
                case "login":
                    include("pages/login.php");
                    break;
                default:
                    include("pages/home.php");
                    break;
            }
        }
        else{
            include("pages/home.php");
        }
    ?>    
</body>

<?php
    if(isset($_GET["excluir"])){
        $excluir=$_GET["excluir"];
        $conexao = new PDO("mysql:host=localhost;dbname=lpwt","root","");
        $deletar = $conexao->PREPARE("delete from candidatos where id=:ID");
        $deletar->bindParam(":ID",$excluir);
        $deletar->execute();
        header("Location:http://localhost?pagina=lista");
    }
?>