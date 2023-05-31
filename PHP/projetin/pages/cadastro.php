<link rel="stylesheet" href="style.css">
<?php
    if(isset($_POST["dtNascimento"])){
        $agora = getdate();
        $anoAtual = $agora['year'];
        $anoNascimento = date_format(date_create($_POST['dtNascimento']),'Y');
        $idade = $anoAtual - $anoNascimento;
        if(!($idade > 14 && $idade < 25)){
            $mensagem = "És novo ou véi d+";
        }
    }
?>
<body>
    <div id="cadastro">
        <p style="text-align:right;">
            <a style="border-right: 5px gray solid; margin-right:10px;" href="?pagina=home">De volta ao Amor</a>
        </p>
        <hr>
        <h1>
            Cadastro de Curriculum
            <sup>
                Jovem Aprendiz
            </sup>
        </h1>
        <hr>
        <form method="POST">
            <label>
                Nome
            </label>
            <input type="text" name="nome">
            <label>
                E-mail
            </label>
            <input type="email" name="email">
            <label>
                Nascimento
            </label>
            <input type="date" name="dtNascimento">
            <button>Enviar</button>
        </form>
        <span id="msg">
            <?php
                print isset($mensagem)?$mensagem:"";            
            ?>
        </span>    
    </div>
</body>

<?php
    if(isset($_POST["dtNascimento"])){
        if($idade > 14 && $idade < 25){
            $conexao = new PDO("mysql:host=localhost;dbname=lpwt","root","123456");
            $inserir = $conexao->prepare("INSERT INTO candidatos(nome,email,dtNascimento) VALUES (:NOME,:EMAIL,:NASCIMENTO)");
            $nome = isset($_POST["nome"])?$_POST["nome"]:"";
            $email = isset($_POST["email"])?$_POST["email"]:"";
            $nascimento = isset($_POST["dtNascimento"])?$_POST["dtNascimento"]:"";
            $inserir->bindParam(":NOME",$nome);
            $inserir->bindParam(":EMAIL",$email);
            $inserir->bindParam(":NASCIMENTO",$nascimento);            
            //print $nome." - ".$email." - ".$nascimento;
            $resultado= $inserir->execute();
            if($resultado){
                print "
                    <script>
                        document.querySelector('#msg').style.backgroundColor = 'green';
                        document.getElementById('msg').innerHTML = 'Usuario Inserido';
                    </script>  
                    ";
            }


        }

    }
?>
  
