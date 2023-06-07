    <div>
        <h2 style="text-align:right">
            Acesso Privado
        </h2>
        <hr style="margin-bottom: 35px;">
        <form method="POST">
            <input type="hidden" name="acao" value="login">
            <label for="">Email</label>
            <input type="text" name="email">
            <label for="">Senha</label>
            <input type="text" name="senha">
            <button>
                Acessar
            </button>
        </form>    
    </div>
<?php
    if(isset($_POST["acao"])){
        $acao = $_POST["acao"];
        if($acao == "login"){
            $email = isset($_POST["email"])?$_POST["email"]:"";
            $senha = isset($_POST["senha"])?$_POST["senha"]:"";
            $conexao = new PDO("mysql:host=localhost;dbname=lpwt","root","ifpe");
            $pesquisa = $conexao->PREPARE("SELECT senha FROM candidatos WHERE email = :EMAIL");
            $pesquisa->bindParam(":EMAIL",$email);
            $pesquisa->execute();
            $password = $pesquisa->fetchAll(PDO::FETCH_ASSOC);
            if($senha == $password[0]["senha"]){
                print "Acesso Area Administrativa";
                session_start();
                $_SESSION["usuario"]=$email;
            }
            else{
                print "Usuário/Senha Incorreta";
            }            
        }
    }
?>