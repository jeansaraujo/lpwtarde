<div>
    <p style="text-align:right;">
        <a style="border-right: 5px gray solid; margin-right:10px;" href="?pagina=home">De volta ao Amor</a>
    </p>
    <hr>
    <h4>
        Lista de Candidatos
    </h4>
    <?php
        $conexao = new PDO("mysql:host=localhost;dbname=lpwt","root","123456");
        $consulta = $conexao->PREPARE("SELECT * from candidatos");
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        print "<ul>";
            foreach ($resultado as $r){
                print "<li>";
                print $r["id"]." / ";
                print $r["nome"]." / ";
                print $r["email"]." / ";
                print $r["dtNascimento"];
                print "<a href='?pagina=home&excluir=".$r["id"]."'>Excluir</a>";
                print "</li>";
            }
        print "</ul>";
    ?>
</div>