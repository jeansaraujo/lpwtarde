<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Finanpes - Finanças Pessoais</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script
      src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body class="bg-primary">
    <div id="layoutAuthentication">
      <div id="layoutAuthentication_content">
        <main>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                  <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Login</h3>
                  </div>
                  <div class="card-body">
                    <form method="POST">
                      <div class="form-floating mb-3">
                        <input
                          name="email"
                          class="form-control"
                          id="inputEmail"
                          type="email"
                          placeholder="name@example.com"
                        />
                        <label for="inputEmail">Email</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input
                          name="senha"
                          class="form-control"
                          id="inputPassword"
                          type="password"
                          placeholder="Sua Senha"
                        />
                        <label for="inputPassword">Senha</label>
                      </div>
                      <div
                        class="d-flex align-items-center justify-content-between mt-4 mb-0"
                      >
                        <a class="small" href="#">Esqueceu a senha?</a>
                        <button type="submit" class="btn btn-primary">Login</button>
                      </div>
                    </form>
                  </div>
                  <div class="card-footer text-center py-3">
                    <div class="small">
                      <a href="#">Cadastrar-se</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
      <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid px-4">
            <div
              class="d-flex align-items-center justify-content-between small"
            >
              <div class="text-muted">Copyright &copy; Your Website 2023</div>
              <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="js/scripts.js"></script>
  </body>

  <?php

    if(isset($_POST["email"])){
      $email = $_POST["email"];
      $senha = $_POST["senha"];
      $conexao = new PDO("mysql:dbname=lpwt;host=localhost","root","ifpe");
      $senhaselect = $conexao->PREPARE("select * from usuarios where email=:EMAIL");
      $senhaselect->bindParam(":EMAIL",$email);
      $senhaselect->execute();
      $resultado = $senhaselect->fetchAll(PDO::FETCH_ASSOC);
      $senhaBD = $resultado[0]["senha"];   
      if($senhaBD == $senha){
        session_start();
        $_SESSION["logon"]=true;
        $_SESSION["nome"]=$resultado[0]["nome"];
        $_SESSION["usuario"]=$resultado[0]["usuario"];
        $_SESSION["email"]=$resultado[0]["email"];
        $_SESSION["tipo"]=$resultado[0]["tipo"];
        header("Location:admin.php");
      } 
    }
    else{
      print " <h1> TESTE </h1>";
    }
  ?> 
</html>
